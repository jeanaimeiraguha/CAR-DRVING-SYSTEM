<?php
$CandidateNationalId=$_GET['CandidateNationalId'];
$select=mysqli_query($conn , "SELECT * FROM grade where CandidateNationalId='$CandidateNationalId'");
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
   CandidateNationalId:<input type="text" name="CandidateNationalId"><br>
   LicenseExamCategory:<input type="text" name=" LicenseExamCategory"> <br>
   ObtainedMarks:<input type="text" name=" ObtainedMarks"> <br>
   Decision:<input type="text" name="Decision"> <br>
   <button name="insert">Create </button>
   </form>  
</body>
</html>