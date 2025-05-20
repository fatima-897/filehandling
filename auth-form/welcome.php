<?php ?>
<?php 
include './header.php';
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}

$user = $_SESSION['user'];

?>
<p class="alert alert-success text-capitalize fs-4">welcome <strong><?php echo $user ?></strong> You've successfully log in</p>
<a href="./logout.php" class="btn btn-danger btn-sm">logout</a>
<a href="./dashboard.php" class="btn btn-danger btn-sm">see dashboard</a>

<?php
include './footer.php';
?>