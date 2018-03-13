<?php
// Create database connection using config file
$databaseHost = 'localhost';
$databaseName = 'contact';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kontak ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Email</th> <th>Subject</th> <th>Message</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['subject']."</td>";  
        echo "<td>".$user_data['message']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";    
    }
    ?>
    </table>
</body>
</html>