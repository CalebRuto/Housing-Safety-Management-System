<?php
    include('functions.php');
    $query = "DELETE * FROM permits, sanitarypermits, mechanicalpermits, electricalpermits, plumbingpermits, electronicspermit
    WHERE
      permits.Id = sanitarypermits.Id = mechanicalpermits.Id = electricalpermits.Id = plumbingpermits.Id = electronicspermit.Id
    ";
        if(performQuery($query)){
            echo "Account has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="approvals.php">Back</a>
