<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location:admin_l.php");
  exit;
}
?>
<meta charset="UTF-8">
<title>Dashboard</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<script type="text/javascript">
       $(document).ready(function(){
           $('[data-toggle="tooltip"]').tooltip();
       });
   </script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>County</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu-v-10.css">
    <link rel="stylesheet" href="assets/css/style_glyph.css">

</head>
<body>
    <div class="container-fluid flex-grow-1 mb-auto" style="height:650px;">
        <div class="row">
<header style="width:100%; height:100px;">
            <div class="col" style="height:100px;">
                <div id="navigation-block">
                    <nav class="navbar navbar-dark navbar-expand bg-dark" style="height:100px;width:100%;">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#" style="font-family:Bungee, cursive;">HSMS</a>
                          <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                          </button>
                            <div class="collapse navbar-collapse" id="navcol-1" style="height:100px;">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Service</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">About</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Contact</a></li>
                                </ul>
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link active" href="admin_logout.php">Log out</a></li>
                                </ul>
                        </div>
                </div>
                </nav>
            </div>
        </div>
</header>
    </div>
    <div class="row" style="height:550px;">
        <div class="col-xl-2 flex-fill" style="padding:0px ;">
            <div class="flex-grow-1 visible vertical-nav" style="width:200px;margin:0px 0px 0px 0px;">
                <h4 class="text-center"> </h4>
                <h4> HSMS Navigation</h4>
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
                  <div class="row">
                      <div class="col-md-12">
                          <div class="page-header clearfix">
                              <h3 class="pull-left">Registered User Details</h3>
                              <a href="create.php" class="btn btn-success pull-right">Add New User</a>
                              <a href="exportData.php" style="margin:0px 10px" class="btn btn-success pull-right">Generate Report</a>
                          </div>
                          <?php
                          // Include config file
                          require_once "config.php";
                          // Attempt select query execution
                          $sql = "SELECT * FROM user_info";
                          if($result = mysqli_query($link, $sql)){
                              if(mysqli_num_rows($result) > 0){
                                  echo "<table class='table table-bordered table-striped'>";
                                      echo "<thead>";
                                          echo "<tr>";
                                              echo "<th>#</th>";
                                              echo "<th>Username</th>";
                                              echo "<th>Password</th>";
                                              echo "<th>Created_at</th>";
                                              echo "<th>Action</th>";
                                          echo "</tr>";
                                      echo "</thead>";
                                      echo "<tbody>";
                                      while($row = mysqli_fetch_array($result)){
                                          echo "<tr>";
                                              echo "<td>" . $row['Id'] . "</td>";
                                              echo "<td>" . $row['Username'] . "</td>";
                                              echo "<td>" . $row['Password'] . "</td>";
                                              echo "<td>" . $row['Created_at'] . "</td>";
                                              echo "<td>";
              echo "<a href='read.php?Id=". $row['Id'] ."' title='View Record' data-toggle='tooltip'>
      								<span class='glyphicon glyphicon-eye-open'></span></a>";
              echo "<a href='update.php?Id=". $row['Id'] ."' title='Update Record' data-toggle='tooltip'>
                      <span class='glyphicon glyphicon-pencil'></span></a>";
              echo "<a href='delete.php?Id=". $row['Id'] ."' title='Delete Record' data-toggle='tooltip'>
                      <span class='glyphicon glyphicon-trash'></span></a>";
               "</td>";
               "</tr>";
                                      }
                                      echo "</tbody>";
                                  echo "</table>";
                                  // Free result set
                                  mysqli_free_result($result);
                              } else{
                                  echo "<p class='lead'><em>No records were found.</em></p>";
                              }
                          } else{
                              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                          }

                          // Close connection
                          mysqli_close($link);
                          ?>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>
