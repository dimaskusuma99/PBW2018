<!--?php
// include database connection file
include_once("contact.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE kontak SET name='$name',email='$email',subject='$subject',message='$message' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: dashboard.php");
}
?-->
<?php
// Display selected user data based on id
// Getting id from url
//$id = $_GET['id'];
 
// Fetech user data based on id
//$result = mysqli_query($mysqli, "SELECT * FROM kontak WHERE id=$id");
 
/*while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$subject = $user_data['subject'];
    $message = $user_data['message'];
}*/
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>

	<?php foreach($kontak as $u){ ?>
	<form action="<?php echo base_url('index.php/crud/update')?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Name</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="name" value="<?php echo $u->name ?>">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td>Subject</td>
				<td><input type="text" name="subject" value="<?php echo $u->subject ?>"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><input type="text" name="message" value="<?php echo $u->message ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>