<?php
include './header.php';
?>

<h2>Submitted Applications</h2>

<table class="table table-bordered text-center">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Resume</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include './db.php';
        $result =  $conn->query("SELECT * From applications order by created_at ASC");
        while ($row = $result->fetch_assoc()) {


        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['position'] ?></td>
                <td>
                    <a href="./uploads/<?php echo $row['cv_filename'] ?>" class="btn btn-info btn-sm" target="_blank">  View</a>
                </td>
            </tr>


        <?php
        }
        ?>
    </tbody>
</table>