<!DOCTYPE html>
<html>
<table style="width:100%">
<tr>
    <th>No</th> <th>Nama</th> <th>Email</th> <th>Subject</th> <th>Message</th> <th>Date</th>
</tr>
<?php
foreach ($data as $data) {
                echo '
                <tr>
                 <td>'.$data['id'].'</td>
                 <td>'.$data['name'].'</td>
                 <td>'.$data['email'].'</td>
                 <td>'.$data['subject'].'</td>
                 <td>'.$data['message'].'</td>
                 <td>'.$data['date'].'</td>
                </tr>
                ';
               }

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=report.xls");
?>
</table>
</html>