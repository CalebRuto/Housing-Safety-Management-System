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
    <title>Permits</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Articale-List-With-Image-Zoom.css">
    <link rel="stylesheet" href="assets/css/dh-header-non-rectangular.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header class="dh-header-non-rectangular">
        <div class="header__bg"></div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar-inverse navbar-fixed-top">
            <div class="container">
              <a class="navbar-brand" href="Homepage.php" style="padding:30px;height:78px;font-weight:bold;font-size:50px;">Hsms</a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
              </button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto" style="margin-top:13px;">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="Homepage.php" uk-scroll="offset:50">Home </a></li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="About.php" uk-scroll="offset:100">ABOUT</a></li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="contact.php" uk-scroll="offset:100">CONTACT</a></li>
                    </ul>
            </div>
            </div>
        </nav>
        <h1>Lorem ipsum</h1>
        <div class="container">
            <div class="col-md-12 dh-header-non-rectangular-container">
                <h1>Housing Safety Management System</h1>
                <p>Lorem ipsum</p>
                <div class="col-md-12">
                    <div class="col-md-4 col-md-offset-4">
                      <button onclick="window.location.href='Contractor.php';" class="btn btn-light btn-lg btn-success" type="button" style="margin:5px;">Contractor Portal</button>
                      <button onclick="window.location.href='Inspections.php';" class="btn btn-light btn-lg btn-primary" type="button" style="margin:5px;">Inspections</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Latest Articles</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;">
                      <img src="assets/img/desk.jpg" style="width:100%;height:236px;"></div>
                    <h3 class="name">Civil / Structural Permit</h3>
                        <form method="post" action="randomizer.php">
                            Randomized ID: <input type="text" name="length" value="" />
                            <button class="btn btn-primary" type="submit" name="generate" style="margin:10px">Generate</button>
                        </form>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <a href="#" class="action"></a>
                </div>

                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;">
                      <img src="assets/img/desk.jpg" style="width:100%;height:236px;"></div>
                    <h3 class="name">Sanitary Permit</h3>
                        <form method="post" action="randomizer_1.php">
                            Randomized ID: <input type="text" name="length" value=""/>
                            <button class="btn btn-primary" type="submit" name="generate" style="margin:10px">Generate</button>
                        </form>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                      <a href="#" class="action"></a>
                </div>

                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;">
                      <img src="assets/img/desk.jpg" style="width:100%;height:236px;"></div>
                    <h3 class="name">Mechanical Permit</h3>
                    <form method="post" action="randomizer_2.php">
                        Randomized ID: <input type="text" name="length" value=""  />
                        <button class="btn btn-primary" type="submit" name="generate" style="margin:10px">Generate</button>
                    </form>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <a href="#" class="action"></a></div>
            </div>
        </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Latest Articles</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;">
                      <img src="assets/img/desk.jpg" style="width:100%;height:236px;"></div>
                    <h3 class="name">Electrical Permit</h3>
                      <form method="post" action="randomizer_3.php">
                          Randomized ID: <input type="text" name="length" value="" />
                          <button class="btn btn-primary" type="submit" name="generate" style="margin:10px">Generate</button>
                    </form>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                      <a href="#" class="action"></a>
                </div>

                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;">
                      <img src="assets/img/desk.jpg" style="width:100%;height:236px;">
                    </div>
                    <h3 class="name">Plumbing Permit</h3>
                      <form method="post" action="randomizer_4.php">
                          Randomized ID: <input type="text" name="length" value="" />
                          <button class="btn btn-primary" type="submit" name="generate" style="margin:10px">Generate</button>
                      </form>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <a href="#" class="action"></a>
                  </form>
                </div>

                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;">
                      <img src="assets/img/desk.jpg" style="width:100%;height:236px;"></div>
                    <h3 class="name">Electronics Permit</h3>
                    <form method="post" action="randomizer_5.php">
                        Randomized ID: <input type="text" name="length" value="" />
                        <button class="btn btn-primary" type="submit" name="generate" style="margin:10px">Generate</button>
                    </form>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                      <a href="#" class="action"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
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
