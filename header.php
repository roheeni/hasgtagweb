<!DOCTYPE html>
<html>
    <head>
        <title>Standard Html</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Standard Html">
        <meta name="keywords" content="Standard Html">
        <meta name="author" content="dewebkiller">
        <!-- Bootstrap -->

        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/layout.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.default.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link href="css/preloader.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    </head>
    <body class="<?php basename($_SERVER['PHP_SELF'], '.php') ?>">
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        <header>
        <nav class="navbar navbar-expand-lg  navbar-light" ><!-- fixed-top  -->
            <div class="container">
                <a href="index.php"><img src="images/logo.png" class=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto nav-color">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Products
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Services
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Rearch and Blogs</a>
                    </li>
                </ul> 
                <form><a href=""><button class=" btn btn-primary" type="submit">Contact Us</button></a></form>
              </div>
          </div>
        </nav>
        </header>
