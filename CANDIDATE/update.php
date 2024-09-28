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
    Candidate ID<input type="text" name="CandidateNationalId" value="<?php $row['']?>"> <br>
    first Name<input type="text" name="FirstName" value="<?php $row['']?>"> <br>
   Last Name<input type="text" name="LastName" value="<?php $row['']?>"><br>
   Gender<input type="text" name="Gender" value="<?php $row['']?>"> <br>

   DOB<input type="text" name="DOB" value="<?php $row['']?>"> <br>
  Exam date<input type="date" name="ExamDate" value="<?php $row['']?>"> <br>
  Phone number<input type="text" name="PhoneNumber" value="<?php $row['']?>"> <br>
   <button name="insert">Create User</button>
   </form> 
</body>
</html>
