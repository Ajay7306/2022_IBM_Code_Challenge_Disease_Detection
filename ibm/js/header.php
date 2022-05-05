
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Admin Home</title>
    <!-- MDB icon -->
   
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
  </head>
  <body>
    <!-- Start your project here-->
<!--Main Navigation-->
<header>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light"  >
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
     
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="view_admin_index.php">Home</a>
          </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
            Registration
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="view_artisan_reg.php">Artisan</a>
              </li>
              <li>
                <a class="dropdown-item" href="view_centre_reg.php">Centre</a>
              </li>
              <li>
                <a class="dropdown-item" href="view_instructor_registration.php">Instructor </a>
              </li>
              <li>
                <a class="dropdown-item" href="view_esi_centre_registration.php">Esi Center </a>
                <li>
                <a class="dropdown-item" href="view_unit_reg.php">Unit </a>
              </li>
              </li>
            </ul>
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
              View
            Details
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="Artisan_View.php">Artisan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="view_Centre_Search.php">Centre</a>
                </li>
                <li>
                  <a class="dropdown-item" href="view_instructor_search.php">Instructor </a>
                </li>
        </ul>
        <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
            Unit Activity
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="view_yarn_variety.php">Spinning</a>
              </li>
              
              <li>
                <a class="dropdown-item" href="View_Weaving_variety.php">Weaving</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Pre-Processing </a>
              </li>
      </ul>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="navbarDropdown"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
        Works
        </a>
        <!-- Dropdown menu -->
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li>
            <a class="dropdown-item" href="view_wage_parameters.php">Parameters</a>
          </li>
          <li>
            <a class="dropdown-item" href="view_holiday.php">Holiday/Working days</a>
          </li>
          <li>
            <a class="dropdown-item" href="view_report_spinning_entry.php">Work Details </a>
          </li>
  </ul>
  <li class="nav-item">
    <a class="nav-link" href="#">Miscellaneous Charges</a>
  </li>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      
  
        
        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="../images/1.jpg"
              class="rounded-circle"
              height="25"
              alt="Khadi Board Kottayam"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
          <a class="dropdown-item" href="./view_change_password.php">Change Password</a>
              <a class="dropdown-item" href="../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!--<script type="text/javascript" src="../js/mdb.min.js"></script>-->
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>