<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">Create New User</a>
    <table border="1">
        <tr>
            <th>CandidateNationalId</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>ExamDate</th>
            <th>PhoneNumber</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
    include('conn.php');
        $select=mysqli_query($conn , "SELECT * FROM candidate");
        while($row=mysqli_fetch_array($select)){
        
        ?>
        <tr>
            <td><?php echo $row['CandidateNationalId']?></td>
            <td><?php echo $row['FirstName']?></td>
            <td><?php echo $row['LastName']?></td>
            <td><?php echo $row['Gender']?></td>
            <td><?php echo $row['DOB']?></td>
            <td><?php echo $row['ExamDate']?></td>
            <td><?php echo $row['PhoneNumber']?></td>
            <td><a href="delete.php?CandidateNationalId=<?php echo $row['CandidateNationalId']?>">Delete</a></td>
            <td><a href=".php?CandidateNationalId=<?php echo $row['CandidateNationalId']?>">Update</a></td>

        </tr>
        <?php
        
        }?>

    </table>
</body>
</html>