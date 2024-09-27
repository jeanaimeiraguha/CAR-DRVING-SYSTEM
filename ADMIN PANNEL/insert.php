<?php
include('conn.php');

if (isset($_POST['insert'])) {
    # code...
    $admin_name=$_POST['admin_name'];
    $admin_passwor=$_POST['admin_password'];
    $insert=mysqli_query($conn , "INSERT INTO admin VALUES('', '$admin_name', '$admin_passwor') ");
    if ($insert) {
        # code...
        echo "Record inserted";
    }
    else{
        echo "not really working";
    }
}
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
    Admin Name:<input type="text" name="admin_name">
    Admin Password:<input type="text" name="admin_passwor">
   <button name="insert">Create Admin</button>
   </form> 
</body>
</html>