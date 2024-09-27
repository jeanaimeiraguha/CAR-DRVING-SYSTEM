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
    <th colspan="2">Operations</th>
</tr>
<?php
        include('conn.php');
        $select =mysqli_query($conn , "SELECT * FROM admin");
        while($row=mysqli_fetch_array($select)){
        ?>
        
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['admin_name']?></td>
    <td><?php echo $row['admin_password']?></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
    <td><a href="update.php?id=<?php echo $row['id']?>">Update</a></td>
    

<?php
        }
    ?>
   </table> 
</body>
</html>