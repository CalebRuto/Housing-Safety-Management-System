<?php
include('functions.php');
    $query ="SELECT nema_certificate.Id, nema_certificate.nema_approval, occupancy_certificate.occupancy_cert,
                    fire_safety_clearance.fire_safety
             FROM nema_certificate, occupancy_certificate, fire_safety_clearance
             WHERE
                nema_certificate.Id = occupancy_certificate.Id = fire_safety_clearance.Id";

  if(count(fetchAll($query)) > 0){
      foreach(fetchAll($query) as $row){
                   $Id = $row['Id'];
                   $nema_approval = $row['nema_approval'];
                   $occupancy_cert = $row['occupancy_cert'];
                   $fire_safety =  $row['fire_safety'];

    $query = " INSERT INTO approved_inspections(nema_approval, occupancy_cert, fire_safety)
               SELECT nema_approval, occupancy_cert, fire_safety
               FROM   nema_certificate, occupancy_certificate, fire_safety_clearance
               WHERE  nema_certificate.Id = occupancy_certificate.Id = fire_safety_clearance.Id ";
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
<a href="approval_inspections.php">Back</a>
