<?php
	include('conn.php');

	foreach ($_FILES['upload']['name'] as $key => $name){

		$newFilename = time() . "_" . $name;
		move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'upload/' . $newFilename);
		$location = 'upload/' . $newFilename;

		mysqli_query($conn,"insert into photo (location) values ('$location')");

		echo "Account has been accepted.";
	}
	header('location:Contractor.php');
?>
