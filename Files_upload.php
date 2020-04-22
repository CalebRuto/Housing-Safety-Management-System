<?php
$connect =mysqli_connect("localhost", "root", "", "projectii");

$sql ="SELECT * FROM approved_permits
        WHERE
            approved_permits.Id";
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Permits</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu-v-10.css">
    <!--<link rel="stylesheet" href="assets/css/styles.css">-->
</head>

<body>
    <div class="container-fluid flex-grow-1 mb-auto" style="height:650px;">
        <div class="row">
            <div class="col" style="height:100px;">
                <div id="navigation-block">
                    <nav class="navbar navbar-dark navbar-expand fixed-top bg-dark" style="height:100px;">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#" style="font-family:Bungee, cursive;">HSMS</a>
                          <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                          </button>
                            <div
                                class="collapse navbar-collapse" id="navcol-1" style="height:100px;">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Service</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">About</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Contact</a></li>
                                </ul>
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Log Out</a></li>
                                </ul>
                        </div>
                </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="row" style="height:550px;">
        <div class="col-xl-2 flex-fill" style="padding:0px ;">
            <div class="flex-grow-1 visible vertical-nav" style="width:200px;margin:0px 0px 0px 0px;">
                <h4 class="text-center"></h4>
                <h4>HSMS Navigation</h4>
                <ul class="vertical-nav-list">
                  <li class="vnav-li"><a href="County_2.php" class="vnav-link"><i class="fa fa-home"></i>User_Credentials</a></li>
                  <li class="vnav-li"><a href="approvals.php" class="vnav-link"><i class="fa fa-tasks"></i>Proposed_Permits</a></li>
                  <li class="vnav-li"><a href="approval_inspections.php" class="vnav-link"><i class="fa fa-list-alt"></i>Proposed_Inspections</a></li>
                  <li class="vnav-li"><a href="approved_permits.php" class="vnav-link"><i class="fa fa-gift"></i>Approved_Permits</a></li>
                  <li class="vnav-li"><a href="approved_Inspections.php" class="vnav-link"><i class="fa fa-money"></i>Approved_Inspections</a></li>
                  <li class="vnav-li"><a href="county_6.php" class="vnav-link"><i class="fa fa-caret-square-o-right"></i>Contractor_Company</a></li>
                  <li class="vnav-li"><a href="Files_upload.php" class="active-link vnav-link"><i class="fa fa-cog"></i>Images</a></li>
                  <li class="vnav-li"><a href="l_out.php" class="vnav-link"><i class="fa fa-eject"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="container" style="width:800px;height:300px;">
            <div class="row" style="height:500px;">
              <div style="height:50px;"></div>
            	<div style="margin:auto; padding:auto; width:80%;">
            		<span style="font-size:25px; color:blue">
                  <center><strong>Files Upload to HSMS System</strong></center></span>
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
            				<img src="<?php echo $row['location']; ?>" height="50px;" width="50px;">
            				<?php
            			}
            		?>
            	</div>
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
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>
