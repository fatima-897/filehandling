
<?php
include './header.php';
    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
        exit();
    }  

    $user = $_SESSION['user']


?>


<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="text-success">Welcome to Dashboard, <strong><?php echo $user; ?></strong>!</h3>
            <p>This is a protected page only visible to logged-in users.</p>

            <!-- Mini Dashboard Boxes -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card text-center border-success">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <p class="card-text">Total: 12</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Messages</h5>
                            <p class="card-text">Unread: 3</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center border-warning">
                        <div class="card-body">
                            <h5 class="card-title">Reports</h5>
                            <p class="card-text">Pending: 2</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-4">
                <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                <a href="./welcome.php" class="btn btn-info btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>


<?php
include './footer.php';
?>
