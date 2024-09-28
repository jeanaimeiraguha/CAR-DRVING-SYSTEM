
<?php
include('conn.php');
session_start();
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
    Admin Name:<input type="text" name="admin_name"><br>
    Admin Password:<input type="text" name="admin_password"> <br>
   <button name="insert">Create Admin</button>
   </form> 
</body>
</html>