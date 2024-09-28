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
   CandidateNationalId:<input type="text" name="CandidateNationalId" value="<?php echo $row[' CandidateNationalId']?>"><br>
   LicenseExamCategory:<input type="text" name=" LicenseExamCategory" value="<?php echo $row['LicenseExamCategory']?>">"> <br>
   ObtainedMarks:<input type="text" name=" ObtainedMarks" value="<?php echo $row['ObtainedMarks']?>">"> <br>
   Decision:<input type="text" name="Decision" value="<?php echo $row['Decision']?>"> <br>
   <button name="insert">Update</button>
   </form>  
</body>
</html>
<?php
include('conn.php');

if (isset($_POST['insert'])) {
    # code...
    $CandidateNationalId=$_POST['CandidateNationalId'];
    $LicenseExamCategory=$_POST['LicenseExamCategory'];
    $ObtainedMarks=$_POST['ObtainedMarks'];
    $Decision=$_POST['Decision'];
    $update=mysqli_query($conn , "UPDATE grade set CandidateNationalId='$CandidateNationalId', LicenseExamCategory='$LicenseExamCategory', ObtainedMarks='$ObtainedMarks',Decision='$Decision'");
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

