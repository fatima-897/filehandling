<?php
include './header.php';
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];


    //fileuploading

    $cvName = $_FILES['cv']['name'];
    $cvTem = $_FILES['cv']['tmp_name'];

    $uploadDir = "uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir);
    }
    $newFile = time() . "-" . basename($cvName);
    $destination = $uploadDir . $newFile;
    if (move_uploaded_file($cvTem, $destination)) {
        $sql = "INSERT into applications (fullname, email, gender, position, cv_filename) 
        values ('$name', '$email', '$gender' , '$position' , '$newFile')";
        if ($conn->query($sql)) {
            
 ?>


<p class="alert alert-success">Thank you <strong><?php echo $name ?></strong>your application has been submitted</p>
<br>
<a href="./view.php" class="btn btn-info">View resume</a>


<?php
        }

    }
}

include './footer.php';
?>
