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
            <th> CandidateNationalId </th>
            <th>LicenseExamCategory</th>
            <th>ObtainedMarks</th>
            <th>Decision</th>
        </tr>
        <?php
        
        include('conn.php');
        $select=mysqli_query($conn , "SELECT * FROM grade");
        while($row=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $row['']?></td>
            <td><?php echo $row['']?></td>
            <td><?php echo $row['']?></td>
            <td><?php echo $row['']?></td>
        </tr>

    </table>
</body>
</html>