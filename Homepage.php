<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: Landin.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <link rel="stylesheet" href="assets/css/Articale-List-With-Image-Zoom.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Zig-Zag-Timeline-v3.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container">
              <a class="navbar-brand" href="#" style="font-size:40px;">HSMS</a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="Contractor.php" style="width:170px;"><strong>Contractor Portal</strong></a>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">
                   <strong>Services</strong></a>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" role="presentation" href="Permits.php">Permits</a>
                              <a class="dropdown-item" role="presentation" href="Inspections.php">Inspections</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="contact.php" style="width:120px;"><strong>Contact</strong></a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="About.php" style="width:120px;"><strong>FAQs</strong></a>
                        </li>
                    </ul><span class="navbar-text actions">
            <a class="btn btn-light btn-lg action-button" role="button" onclick="window.location.href='Logout.php';">Log Out</a>
                    </span></div>
    </div>
    </nav>
    <div class="carousel slide carousel-fade  justify-content-center flex-wrap" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="jumbotron hero-nature carousel-hero" style="height:500px;">
                    <h1 class="hero-title">Housing Safety Management System</h1>
                    <p class="hero-subtitle"style="font-size:20px;font-weight:bold;">Construction is a matter of optimism; its a matter of facing the future with confidence</p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="Permits.php">&nbsp; &nbsp;Permits&nbsp; &nbsp;</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron hero-photography carousel-hero" style="height:500px;">
                    <h1 class="hero-title">Housing Safety Management System</h1>
                    <p class="hero-subtitle" style="font-size:20px;font-weight:bold;">Truth is confirmed by Inspection and delay;falsehood by haste and uncertainty</p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="Inspections.php">Inspections</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron hero-technology carousel-hero" style="height:500px;">
                    <h1 class="hero-title">HSMS ABOUT</h1>
                    <p class="hero-subtitle" style="font-size:20px;font-weight:bold;">I am currently under construction.Thank you for your patience.</p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
          <i class="fa fa-chevron-left"></i>
          <span class="sr-only">Previous</span></a>
          <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
            <i class="fa fa-chevron-right"></i>
            <span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
    </div>
    <div class="article-list">
        <div class="container-fluid">
            <div class="intro">
                <h2 class="text-center">Welcome to HSMS</h2>
                <p class="text-center" style="font-size:20px;font-family:Amaranth, sans-serif;">"Affordable Housing Transcends Our Ability To Zone It Into Existence" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; Don Charles. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;">
                      <img src="assets/img/helmet-98747_640.png" style="width:100%;height:236px;">
                    </div>
                    <h3 class="name" style="font-size:20px;">Contractor Portal</h3>
                    <p class="description" style="font-family:ABeeZee, sans-serif;font-size:20px;">This section covers client information uploads( title deed, Survey Plan, Project Report) e.t.c.</p>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;"><img src="assets/img/certified-4641036_640.png" style="width:100%;height:236px;"></div>
                    <h3 class="name" style="font-size:20px;">Inspections</h3>
                    <p class="description" style="font-family:ABeeZee, sans-serif;font-size:20px;">For all Inspections required in the &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;housing construction process. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;"><img src="assets/img/administrate-4855772_640.jpg" style="width:100%;height:236px;"></div>
                    <h3 class="name" style="font-size:20px;">Permits</h3>
                    <p class="description" style="font-size:20px;font-family:ABeeZee, sans-serif;">For all Permits required in the &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; housing construction process. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br><br></p>
                </div>
                <div class="col offset-0 float-none">
                  <button onclick="window.location.href='Contractor.php';" class="btn btn-primary btn-lg" type="button" style="margin:0px 100px 0px;">Continue &gt;&gt;&gt;</button>
                </div>
                <div class="col">
                  <button onclick="window.location.href='Inspections.php';" class="btn btn-primary btn-lg" type="button" style="margin:0px 100px 0px;">Continue &gt;&gt;&gt;</button>
                </div>
                <div class="col">
                  <button onclick="window.location.href='Permits.php';" class="btn btn-primary btn-lg" type="button" style="margin:0px 100px 0px;">Continue &gt;&gt;&gt;</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row"></div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="Contractor.php">Contractor Portal</a></li>
                            <li><a href="Inspections.php">Inspections</a></li>
                            <li><a href="Permits.php">Permits</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Housing Safety Management System</h3>
                        <p>HSMS is a solution geared towards providing a safe and transparent way of accessing permits and applications. It also seeks to  fast-track the approvals process.</p>
                    </div>
                    <div class="col item social">
                      <a href="https://www.facebook.com/caleb.Ruto45"><i class="icon ion-social-facebook"></i></a>
                      <a href="https://twitter.com/calebruto"><i class="icon ion-social-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/caleb-ruto-65a74a122/"><i class="icon ion-social-linkedin"></i></a>
                      <a href="https://www.instagram.com/caleb_ruto/"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">Company Name © 2020</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
