<?php

session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

echo "Welcome, " . $_SESSION['admin'];
?>
<a href=".../add_candidate.php">Add Candidate</a>
<a href="../CANDIDATE/select.php">View Candidates</a>
<a href="logout.php">Logout</a>
