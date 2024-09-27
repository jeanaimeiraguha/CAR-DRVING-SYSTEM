<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1">
<tr>
    <th>ID</th>
    <th>Admin Name</th>
    <th>Admin Password</th>
</tr>
<?php
include('conn.php');
$select =mysqli_query($conn , "SELECT * FROM admin");

while($row=mysqli_fetch_all($select)){
?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['admin_name']?></td>
    <td><?php echo $row['admin_password']?></td>
</tr>

   </table> 
</body>
</html>