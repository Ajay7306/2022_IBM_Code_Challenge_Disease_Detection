from flask import Flask, request, jsonify
from werkzeug.utils import secure_filename
import os

# flask cors
from flask_cors import CORS


from tensorflow import keras

import numpy as np
from PIL import Image

PATH_TO_MODEL = "./Mobilenetv2.h5"
__model = keras.models.load_model(PATH_TO_MODEL)
def object_detector(model, image_np_array) -> str:
    """

    """
    classes = [
    'Tomato___Bacterial_spot',
    'Tomato___Early_blight',
    'Tomato___Late_blight',
    'Tomato___Leaf_Mold',
    'Tomato___Septoria_leaf_spot',
    'Tomato___Spider_mites Two-spotted_spider_mite',
    'Tomato___Target_Spot',
    'Tomato___Tomato_Yellow_Leaf_Curl_Virus',
    'Tomato___Tomato_mosaic_virus',
    'Tomato___healthy'
    ]
    
    prediction = model.predict(image_np_array.reshape(-1,256,256,3)/255)
    prediction_class_index  = np.argmax(prediction)

    print(prediction[0][prediction_class_index])

    return classes[prediction_class_index]


app = Flask(__name__)
CORS(app)


#flask route
@app.route('/', methods=['GET'])
def index():
    return jsonify("Hello World!")


@app.route('/predict', methods=['GET','POST'])
def predict():
    # get image
    # get prdiction 
    # return prediction

    if request.method == 'POST':
        # Get the file from post request
        
        f = request.files['file']
        print(f)
        # Save the file to ./uploads
        basepath = os.path.dirname(__file__)
        file_path = os.path.join(
            basepath, 'uploads', secure_filename(f.filename))
        f.save(file_path)

        # Make prediction
        try:
            image = Image.open(file_path)
            image = image.resize((256,256))
            image_np_array = np.asarray(image)
            os.remove(file_path)
        except Exception as e:
            return jsonify({"error":"Image processing error", "message":str(e)})

        try:
            prediction = object_detector(__model, image_np_array)
        except Exception as e:
            return jsonify({"error":"Model processing error", "message":str(e)})

        return jsonify({"prediction":prediction})


    return jsonify({'error': 'no file'})

if __name__ == '__main__':
    app.run(debug=True)