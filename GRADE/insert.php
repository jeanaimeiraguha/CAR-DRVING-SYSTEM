<?php
include('conn.php');

if (isset($_POST['insert'])) {
    # code...
    $CandidateNationalId=$_POST['CandidateNationalId'];
    $LicenseExamCategory=$_POST['LicenseExamCategory'];
    $ObtainedMarks=$_POST['ObtainedMarks'];
    $Decision=$_POST['Decision'];
    $insert=mysqli_query($conn , "INSERT INTO grade VALUES('$CandidateNationalId', '$LicenseExamCategory', '$ObtainedMarks','$Decision') ");
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
   CandidateNationalId:<input type="text" name="CandidateNationalId"><br>
   LicenseExamCategory:<input type="text" name=" LicenseExamCategory"> <br>
   ObtainedMarks:<input type="text" name=" ObtainedMarks"> <br>
   Decision:<input type="text" name="Decision"> <br>
   <button name="insert">Create </button>
   </form> 
</body>
</html>