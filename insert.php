<?php
include('conn.php');

if (isset($_POST['insert'])) {
    # code..
    $CandidateNationalId=$_POST['CandidateNationalId'];
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Gender=$_POST['Gender'];
    $DOB=$_POST['DOB'];
    $ExamDate=$_POST['ExamDate'];
    $PhoneNumber=$_POST['PhoneNumber'];
  
    $insert=mysqli_query($conn , "INSERT INTO admin VALUES('', '$CandidateNationalId', '$FirstName' , '$LastName' , '$Gender' ,'$DOB') ");
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
    Candidate ID<input type="text" name="CandidateNationalId">
    first Name<input type="text" name="FirstName">
   Last Name<input type="text" name="LastName">
   Gender<input type="text" name="Gender">
    Candidate ID<input type="text" name="">
   DOB<input type="text" name="DOB">
  Exam date<input type="date" name="ExamDate">
  Phone number<input type="text" name="PhoneNumber">
   <button name="insert">Create User</button>
   </form> 
</body>
</html>