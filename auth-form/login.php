<?php 
include './header.php';
session_start();



$username = $_POST['username'];
$password = $_POST['password'];

if($username === "admin" && $password=== "abc123") {
    $_SESSION['user'] = $username;

    header("Location: welcome.php");
    exit();
} else {
?>
<p class="alert alert-danger">Invalid credentials</p>
<a href="./index.php" class="btn btn-info">Try again</a>


<?php
}
include './footer.php';
?>