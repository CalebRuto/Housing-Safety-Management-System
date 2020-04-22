<?php
//include database configuration file
include 'config.php';

//get records from database
$query = $link->query("SELECT * FROM approved_inspections ORDER BY Id DESC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "Inspections Approved_" . date('Y-m-d') . ".csv";

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('Id', 'nema_approval', 'occupancy_cert', 'fire_safety');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['Id'], $row['nema_approval'], $row['occupancy_cert'], $row['fire_safety']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>
