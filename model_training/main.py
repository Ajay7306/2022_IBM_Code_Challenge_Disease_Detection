from logging import exception
import os
os.chdir('./tomato/')
os.listdir()

import warnings
warnings.filterwarnings('ignore')

from PIL import Image


from tensorflow import keras
from tensorflow.keras.applications import MobileNetV2
from tensorflow.keras.layers import GlobalAveragePooling2D, Dense
from tensorflow.keras.models import Model


# Forming datasets

datagen = keras.preprocessing.image.ImageDataGenerator(rescale=1/255, validation_split=0.3)
# Training and validation dataset
train = datagen.flow_from_directory(os.path.abspath('train'), seed=123, subset='training')
val = datagen.flow_from_directory(os.path.abspath('train'), seed=123, subset='validation')

# Test dataset for evaluation
datagen2 = keras.preprocessing.image.ImageDataGenerator(rescale=1/255)

test = datagen2.flow_from_directory('./val')


# Function to initialize model (ResNet152V2)

def get_model():
    try:
        base_model = MobileNetV2(input_shape=(256,256,3), include_top=False)
    except:
        print("please connect to internet to download imagenetv2 model [IMPORTANT]...")
        quit()
    for layers in base_model.layers[:140]:
        layers.trainable = False
    for layers in base_model.layers[140:]:
        layers.trainable = True
        
    
    x = base_model.output
    x = GlobalAveragePooling2D()(x)
    x = Dense(1000, activation='relu')(x)
    pred = Dense(10, activation='softmax')(x)
    
    model = Model(inputs=base_model.input, outputs=pred)
    
    return model

# Model initialization
model = get_model()
model.summary()


# Model training
model.compile(loss='categorical_crossentropy', optimizer='sgd', metrics='accuracy')
history = model.fit(train, batch_size=80, epochs=15, validation_data=val)

model.evaluate(test)

model.save("/Mobilenetv2.h5")