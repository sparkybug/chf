<?php 
    include_once 'dbconnect.php';

    session_start();

    if(isset($_SESSION['adminSession']) != "") {
        header("Location: adminDashboard.php");
    }

    if(isset($_POST['login'])) {
        $adminUsername = mysqli_real_escape_string($con, $_POST['adminUsername']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $res = mysqli_query($con, "SELECT * FROM adminTable WHERE adminUsername = '$adminUsername'");
        $row = mysqli_fetch_array($res);

        if($row['password'] == $password) {
            $_SESSION['adminSession'] = $row['adminUsername'];

            header("Location: adminDashboard.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Charity-Web</title>
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <!-- start -->
            <div class="login-container">
                    <div id="output"></div>
                    <div class="avatar"></div>
                    <div class="form-box">
                        <form class="form" role="form" action="" method="POST" accept-charset="UTF-8">
                            <input name="adminUsername" type="text" placeholder="Admin Username" required>
                            <input name="password" type="password" placeholder="Password" required>
                            <button class="btn btn-info btn-block login" type="submit" name="login">Login</button>
                        </form>
                    </div>
                </div>
            <!-- end -->
        </div>

        <script src="assets/js/jquery.js"></script>

        <!-- js start -->
        
        <!-- js end -->
    </body>
</html>