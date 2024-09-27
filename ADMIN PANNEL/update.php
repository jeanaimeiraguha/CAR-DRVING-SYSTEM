<?php

include('conn.php');

$id=$_POST['id'];

$select=mysqli_query($conn , "SELECT * FROM admin where id='$id'");
$row=mysqli_fetch_all($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Admin Name:<input type="text" name="admin_name" value="<?php echo $row['id']?>"><br>
    Admin Password:<input type="text" name="admin_password" value="<?php echo $row['admin_name']?>"> <br>
   <button name="insert">Create Admin</button>
   </form> 
</body>
</html>