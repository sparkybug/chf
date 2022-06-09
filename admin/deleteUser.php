<?php 
    include_once 'dbconnect.php';

    // getting the variables
    $userId = $_POST['id'];

    $delete = mysqli_query($con, "DELETE FROM userTable WHERE userId = $userId");
?>