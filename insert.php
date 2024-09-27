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
    Candidate ID<input type="text" name="">
    first Name<input type="text" name="">
   Last Name<input type="text" name="">
   Gender<input type="text" name="">
    Candidate ID<input type="text" name="">
   DOB<input type="text" name="">
  Exam date<input type="text" name="">
  Phone number<input type="text" name="">
   <button name="insert">Create User</button>
   </form> 
</body>
</html>