<?php
// include 'database.php';
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: index.html");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="vh-100 overflow-hidden">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <div class="container">
          <a class="navbar-brand fs-4" >main page</a>
          <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header text-white border-bottom">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">main page</h5>
              <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>


            <div class="offcanvas-body d-flex flex-column  flex-lg-row p-4 p-lg-0">
              <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
             
                <li class="nav-item mx-2">
                  <a class="nav-link active" href="comingsoon.html">furniture</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link " href="image.php">map upload</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link active" href="comingsoon.html">designer</a>
                  </li>
                  <li class="nav-item v">
                    <a class="nav-link active" href="developer.html">developer</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link active" href="home.html">more information</a>
                  </li>
          
              </ul>
             <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
      
                <a href="logout.php" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: #a40b2c ;">logout</a>



             </div>
            </div>
          </div>
        </div>
      </nav>
      <section class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center text-white fs-1">
        <h1 style="font-size: 1.5em">We help you to create your <span style="color:#a40b2c;">own style</span></h1>
        <h1 style="font-size: 1.3em">welcome to our page <span style="color:#a40b2c;"><?php echo $_SESSION["user"] ?></span></h1>


      </section>
</body>
</html>