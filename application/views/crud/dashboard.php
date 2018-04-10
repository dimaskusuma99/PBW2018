<!--?php
// Create database connection using config file
$databaseHost = 'localhost';
$databaseName = 'contact';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kontak ORDER BY id DESC");
?-->
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <table width='80%' border=1>
 
    <tr>
        <th>No</th> <th>Nama</th> <th>Email</th> <th>Subject</th> <th>Message</th> <th>Update</th>
    </tr>
    <?php 
        $no = 1;
        foreach($kontak as $u){ 
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->name ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php echo $u->subject ?></td>
            <td><?php echo $u->message ?></td>
            <td>
                  <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                    <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>

    </table>
        <center>
            <a href='<?php echo base_url()."index.php/crud/download/"; ?>'>Download</a>
            <!--<form action="download"><input style="color: black; padding: 5px;" type="submit" value="Download Comments"></form>-->
        </center>
    
    <center><a style='font-weight: bold; font-size: 20px' href="<?php echo base_url()?>index.php/chart">Report</a></center>
    
    

</body>
</html>