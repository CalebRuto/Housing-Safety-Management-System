<?php
include('functions.php');
$query = "SELECT permits.Id, permits.civil_permit, sanitarypermits.sanitary_permit, mechanicalpermits.mechanical_permit,
                 electricalpermits.electrical_permit, plumbingpermits.plumbing_permit, electronicspermit.electronics_permit
          FROM permits, sanitarypermits, mechanicalpermits, electricalpermits, plumbingpermits, electronicspermit
          WHERE
          permits.Id = sanitarypermits.Id = mechanicalpermits.Id = electricalpermits.Id = plumbingpermits.Id = electronicspermit.Id ";

    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $Id = $row['Id'];
            $civil_permit = $row['civil_permit'];
            $sanitary_permit = $row['sanitary_permit'];
            $electrical_permit = $row['electrical_permit'];
            $mechanical_permit = $row['mechanical_permit'];
            $plumbing_permit = $row['plumbing_permit'];
			      $electronics_permit = $row['electronics_permit'];

$query = "INSERT INTO approved_permits(civil_permit, sanitary_permit, mechanical_permit, electrical_permit, plumbing_permit, electronics_permit)
          SELECT civil_permit, sanitary_permit, mechanical_permit, electrical_permit, plumbing_permit, electronics_permit
          FROM permits, sanitarypermits, mechanicalpermits, electricalpermits, plumbingpermits, electronicspermit
          WHERE
          permits.Id = sanitarypermits.Id = mechanicalpermits.Id = electricalpermits.Id = plumbingpermits.Id = electronicspermit.Id ";
        }
        // $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }

?>
<br/><br/>
<a href="approvals.php">Back</a>
