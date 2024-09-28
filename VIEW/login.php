
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
   <button name="insert">Login as admin</button>
   </form> 
</body>
</html>
<?php
include('conn.php');
session_start();
if (isset($_POST['insert'])) {
    # code...
    $admin_name=$_POST['admin_name'];
    $admin_password=$_POST['admin_password'];


$login=mysqli_query($conn , "SELECT * FROM admin where admin_name='$admin_name' AND admin_password='$admin_password'");
$count=mysqli_num_rows($login)>1;
if ($count ==1) {
    # code...

$_SESSION['admin_name']=$_POST['admin_name']=$admin_name;
$_SESSION['admin_password']=$_POST['admin_password']=$admin_password;
header('location:dashboard.php');
}
else{
    echo 'wrong credential';
}}
?>