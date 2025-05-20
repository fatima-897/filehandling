<?php 
include './header.php';
session_start();
session_unset();
session_destroy();



if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}

$user = $_SESSION['user'];

?>

<p class="alert alert-danger">you've logout <strong><?php echo $user ?></strong> </p>
<a href="./index.php" class="btn btn-info">Go back</a>

<?php

include './footer.php';
?>