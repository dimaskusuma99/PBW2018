<?php
$databaseHost = 'localhost';
$databaseName = 'contact';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// include database connection file

 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kontak WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:dashboard.php");
?>
