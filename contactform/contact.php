<?php
$databaseHost = 'localhost';
$databaseName = 'contact';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
        $message = $_POST['message'];
		
		// include database connection file

				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO kontak(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
		
		// Show message when user added
		echo "User added successfully. <a href=\"..\">kembali</a>";
	}
	?>