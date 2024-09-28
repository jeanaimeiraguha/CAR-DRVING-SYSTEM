<?php
$CandidateNationalId=$_GET['CandidateNationalId'];
$delete=mysqli_query($conn , "DELETE  FROM candidate");
if ($delete) {
    # code...
    header('location:select.php');
}

?>