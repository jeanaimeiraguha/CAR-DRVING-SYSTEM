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
    Candidate ID<input type="text" name="CandidateNationalId" value="<?php echo $row['CandidateNationalId']?>"> <br>
    first Name<input type="text" name="FirstName" value="<?php echo $row['FirstName']?>"> <br>
   Last Name<input type="text" name="LastName" value="<?php echo $row['LastName']?>"><br>
   Gender<input type="text" name="Gender" value="<?php  echo $row['Gender']?>"> <br>

   DOB<input type="date" name="DOB" value="<?php echo $row['DOB']?>"> <br>
  Exam date<input type="date" name="ExamDate" value="<?php echo $row['ExamDate']?>"> <br>
  Phone number<input type="number" name="PhoneNumber" value="<?php echo $row['PhoneNumber']?>"> <br>
   <button name="insert">Update User</button>
   </form> 
</body>
</html>
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
  
    $update=mysqli_query($conn , "UPDATE candidate SET CandidateNationalId='$CandidateNationalId',FirstName='$FirstName' ,LastName='$LastName' ,Gender='$Gender' ,DOB='$DOB' ,ExamDate='$ExamDate' ,PhoneNumber='$PhoneNumber'");
    if ($update) {
        # code...
        //echo "Record inserted";
        header('location:select.php');
    }
    else{
        echo "not really working";
    }
}
?>

