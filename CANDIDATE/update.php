<?php
include('conn.php');
$CandidateNationalId=$_GET['CandidateNationalId'];
$select=mysqli_query($conn , "SELECT * FROM candidate where CandidateNationalId='$CandidateNationalId'");
$row=mysqli_fetch_array($select);

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
    Candidate ID<input type="text" name="CandidateNationalId" value="<?php $row['CandidateNationalId']?>"> <br>
    first Name<input type="text" name="FirstName" value="<?php $row['FirstName']?>"> <br>
   Last Name<input type="text" name="LastName" value="<?php $row['LastName']?>"><br>
   Gender<input type="text" name="Gender" value="<?php $row['Gender']?>"> <br>

   DOB<input type="text" name="DOB" value="<?php $row['DOB']?>"> <br>
  Exam date<input type="date" name="ExamDate" value="<?php $row['ExamDate']?>"> <br>
  Phone number<input type="text" name="PhoneNumber" value="<?php $row['PhoneNumber']?>"> <br>
   <button name="insert">Create User</button>
   </form> 
</body>
</html>

