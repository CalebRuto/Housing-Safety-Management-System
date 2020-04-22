<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "projectii");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$Contractor_Id = mysqli_real_escape_string($link, $_REQUEST['Contractor_Id']);
$QuantityS_Id = mysqli_real_escape_string($link, $_REQUEST['QuantityS_Id']);
$Architect_Id = mysqli_real_escape_string($link, $_REQUEST['Architect_Id']);
$Engineer_Id = mysqli_real_escape_string($link, $_REQUEST['Engineer_Id']);

// Attempt insert query execution
$sql = "INSERT INTO contractor_company (Contractor_Id, QuantityS_Id, Architect_Id, Engineer_Id)
        VALUES ('$Contractor_Id', '$QuantityS_Id', '$Architect_Id', '$Engineer_Id')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
