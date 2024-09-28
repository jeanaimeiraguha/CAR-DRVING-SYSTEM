<?php

include('conn.php');
$CandidateNationalId=$_GET['CandidateNationalId'];
$delete=mysqli_query($conn , "DELETE FROM grade where CandidateNationalId='$CandidateNationalId'");
if ($delete) {
    # code...
    header('location:select.php');
}


?>