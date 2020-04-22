<?php
//include database configuration file
include 'config.php';

//get records from database
$query = $link->query("SELECT * FROM user_info ORDER BY Id DESC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "Users_" . date('Y-m-d') . ".csv";

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('Id', 'Username', 'Password', 'Created_at');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
      //  $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['Id'], $row['Username'], $row['Password'], $row['Created_at']);
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
