<?php
include('conn.php');

if (isset($_POST['insert'])) {
    # code...
    $admin_name=$_POST['admin_name'];
    $admin_password=$_POST['admin_password'];
    $insert=mysqli_query($conn , "INSERT INTO admin VALUES('', '$admin_name', '$admin_password') ");
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
    Candidate ID<input type="text">
    first Name<input type="text">
   Last Name<input type="text">
   Gender<input type="text">
    Candidate ID<input type="text">
   DOB<input type="text">
  Exam date<input type="text">
  Phone number<input type="text">
   <button name="insert">Create Admin</button>
   </form> 
</body>
</html>