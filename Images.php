<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/dh-header-non-rectangular.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header class="dh-header-non-rectangular">
        <div class="header__bg"></div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean navbar-inverse navbar-fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#" style="padding:30px;height:78px;font-weight:bold;font-size:50px;">HSMS</a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto" style="margin-top:13px;">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" uk-scroll="offset:50">Home </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#empresa" uk-scroll="offset:100">Lorem </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#areas" uk-scroll="offset:100">Lorem </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#diferencial" uk-scroll="offset:50">Lorem </a></li>
                    </ul>
            </div>
            </div>
        </nav>
        <h1>Lorem ipsum</h1>
        <div class="container">
            <div class="col-md-12 dh-header-non-rectangular-container">
                <h1>Lorem ipsum dolor</h1>
                <p>Lorem ipsum</p>
                <div class="col-md-12">
                    <div class="col-md-4 col-md-offset-4">
                      <button class="btn btn-light btn-lg btn-success" type="button" style="margin:5px;">Lorem </button>
                      <button class="btn btn-light btn-lg btn-primary" type="button" style="margin:5px;">Lorem </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container" style="width:1200px;height:500px;">
        <div class="row" style="height:500px;">
          <div style="height:50px;"></div>
        	<div style="margin:auto; padding:auto; width:80%;">
        		<span style="font-size:25px; color:blue">
              <center><strong>Uploading Multiple Files into MySQL Database using PHP/MySQLi</strong></center></span>
        		<hr>
        		<div style="height:20px;"></div>
        		<form method="POST" action="upload.php" enctype="multipart/form-data">
        		<input type="file" name="upload[]" multiple>
        		<input type="submit" value="Upload">
        		</form>
        	</div>
        	<div style="margin:auto; padding:auto; width:80%;">
        		<h2>Output:</h2>
        		<?php
        			include('conn.php');
        			$query=mysqli_query($conn,"select * from photo");
        			while($row=mysqli_fetch_array($query)){
        				?>
        				<img src="<?php echo $row['location']; ?>" height="150px;" width="150px;">
        				<?php
        			}
        		?>
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
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social">
                      <a href="#"><i class="icon ion-social-facebook"></i></a>
                      <a href="#"><i class="icon ion-social-twitter"></i></a>
                      <a href="#"><i class="icon ion-social-snapchat"></i></a>
                      <a href="#"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
