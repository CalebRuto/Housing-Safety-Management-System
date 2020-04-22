<?php
// Include the database configuration file
include_once 'config.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'C:\xampp\htdocs\Project_II\Designs\uploads'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
