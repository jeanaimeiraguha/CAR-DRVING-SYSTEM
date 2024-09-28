<?php
include('conn.php');
$CandidateNationalId=$_GET['CandidateNationalId'];
$select=mysqli_query($conn , "SELECT * FROM candidate where CandidateNationalId='$CandidateNationalId'");
$row=mysqli_fetch_array($select);

?>