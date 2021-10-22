<?php
include 'header.php';
include 'config.php';
?>
<main class="container">

    <?php
    // 1. get the ID of Patient to be deleted
    $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM patient WHERE patientid=$id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);
    // Check whether the query executed successfully or not
    if ($res == true) {
        //Query Executed Successully and Deleted
        echo '<h1>Patient Deleted</h1>';
        header('location:' . WWW);
    } else {
        //Failed to Delete Admin
        echo "Failed to Delete Patient";
        header('location:' . WWW . 'error.php');
    }
    ?>
</main>
<?php
include 'footer.php';