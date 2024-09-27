<?php

include('conn.php');


$id = $_GET['id'];


$select = mysqli_query($conn, "SELECT * FROM admin WHERE id='$id'");


$row = mysqli_fetch_assoc($select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin</title>
</head>
<body>

<form action="" method="post">
    Admin Name: <input type="text" name="admin_name" value="<?php echo isset($row['admin_name']) ? $row['admin_name'] : ''; ?>"><br>
    Admin Password: <input type="text" name="admin_password" value="<?php echo isset($row['admin_password']) ? $row['admin_password'] : ''; ?>"> <br>
    <button name="update">Update</button>
</form>

</body>
</html>

<?php

if (isset($_POST['update'])) {
 
    $admin_name =  $_POST['admin_name'];
    $admin_password =  $_POST['admin_password'];
 
    $update = mysqli_query($conn, "UPDATE admin SET admin_name='$admin_name', admin_password='$admin_password' WHERE id='$id'");

    if ($update) {
 
        header('Location: select.php');
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>
