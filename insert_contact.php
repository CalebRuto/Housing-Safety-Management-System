<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "projectii");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Comments = mysqli_real_escape_string($link, $_REQUEST['Comments']);

// Attempt insert query execution
$sql = "INSERT INTO contact(Name, Email, Comments)
        VALUES ('$Name', '$Email', '$Comments')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
