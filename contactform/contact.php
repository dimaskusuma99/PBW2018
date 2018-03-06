<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to="dimaskusuma99@gmail.com";

$message="<h2>via Form Kontak Website</h2>
				<h4>Nama</h4><p>'$name'</p>
				<h4>Email</h4><p>'$email'</p>
				<h4>Pesan</h4><p>'$message'</p>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: infotech-its.000webhostapp.com'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: admin@infotech-its.000webhostapp.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>