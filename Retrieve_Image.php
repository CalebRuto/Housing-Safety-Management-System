<?php
// Include the database configuration file
include_once 'config.php';

// Get images from the database
$query = $db->query("SELECT * FROM photo ORDER BY photoid DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'upload/'.$row["location"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
