<?php

include('conn.php');

// Fetch the ID from the URL
$id = $_GET['id'];

// Fetch admin data from the database using the provided ID
$select = mysqli_query($conn, "SELECT * FROM admin WHERE id='$id'");

// Fetch a single row as an associative array
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
// Process the form submission
if (isset($_POST['update'])) {
    // Get values from the form
    $admin_name = mysqli_real_escape_string($conn, $_POST['admin_name']);
    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);
    
    // Update the admin details in the database
    $update = mysqli_query($conn, "UPDATE admin SET admin_name='$admin_name', admin_password='$admin_password' WHERE id='$id'");

    if ($update) {
        // Redirect to select.php after successful update
        header('Location: select.php');
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>
