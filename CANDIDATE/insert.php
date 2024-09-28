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
  
    $insert=mysqli_query($conn , "INSERT INTO candidate VALUES('$CandidateNationalId','$FirstName' ,'$LastName' ,'$Gender' ,'$DOB' ,'$ExamDate' ,'$PhoneNumber')");
    if ($insert) {
        # code...
        //echo "Record inserted";
        header('location:select.php');
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
    Candidate ID<input type="text" name="CandidateNationalId"> <br>
    first Name<input type="text" name="FirstName"> <br>
   Last Name<input type="text" name="LastName"><br>
   Gender<input type="text" name="Gender"> <br>

   DOB<input type="date" name="DOB"> <br>
  Exam date<input type="date" name="ExamDate"> <br>
  Phone number<input type="text" name="PhoneNumber"> <br>
   <button name="insert">Create User</button>
   </form> 
</body>
</html>