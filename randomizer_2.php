<?php

function getRandomPassword($length=12, $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789!@#$%^&*()_-=+;:,.?"){
    return substr(str_shuffle($chars),0,$length);
}

function savePasswordToDatabase($password, $dbh){
  // First we prepare our query
  $stmt = $dbh->prepare("INSERT INTO mechanicalpermits (`mechanical_permit`) VALUES (:password)");

  // We bind values to our prepared query
  $stmt->bindParam(':password',$password);

  // We execute our query
  $stmt->execute();
}
try{
$dbh = new PDO('mysql:host=localhost;dbname=projectii', 'root', '');
// set the PDO error mode to exception
   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>

<?php
if (isset($_POST['generate'])) {
    $length = (int)$_POST['length'];
    if ($length < 6) $length = 6;
    $randomPassword = getRandomPassword($length);
    savePasswordToDatabase($randomPassword, $dbh);
    echo "Randomized Permit ID is: {$randomPassword}";
}
?>
