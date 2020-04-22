<?php
    include('functions.php');
    $query = "DELETE * FROM nema_certificate, occupancy_certificate, fire_safety_clearance
            WHERE
                nema_certificate.Id = occupancy_certificate.Id = fire_safety_clearance.Id";
    ";
        if(performQuery($query)){
            echo "Account has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="approval_inspections.php">Back</a>
