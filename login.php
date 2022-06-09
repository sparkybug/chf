<?php 
  include_once 'dbconnect.php';
?>

<?php 
  session_start();

  // $_SESSION['userSession'] = $userSession;

  // if(isset($_SESSION['userSession']) != "") {
  //   header("Location: user/user.php");
  // }

  if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $res = mysqli_query($con, "SELECT * FROM userTable WHERE username = '$username'");
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

    if($row['password'] == $password) {
      $_SESSION['userSession'] = $row['username'];
      header("Location: user/userDashboard.php");
    }
  }
?>

    <!-- <script type="text/javascript"> alert('Login Successful'); </script> -->

<?php
  // header("Location: user/user.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="imgs/favicon1.ico" />
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Terminal+Dosis" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Terminal+Dosis" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
    <link href="upcoming.css" rel="stylesheet"> 


    

</head>
<body style="font-family: 'Acme', sans-serif;">
  <div class="loader_bg">
		<div class="loader"></div>
	</div>
    <nav class="navbar sticky-top">
    <img src="./imgs/convenanth.png" alt="LOGO" class="logo">
            <div class="push-left">
          <button id="menu-toggler" data-class="menu-active" class="hamburger">
            <span class="hamburger-line hamburger-line-top"></span>
            <span class="hamburger-line hamburger-line-middle"></span>
            <span class="hamburger-line hamburger-line-bottom"></span>
          </button>
      
        
                <ul id="primary-menu" class="menu nav-menu">
                  <li class="menu-item current-menu-item"><a class="nav__link" id="home" href="index.php">Home</a></li>
                  <li class="menu-item current-menu-item"><a class="nav__link" id="home" href="contact.php">Contact Us</a></li>
                  <li class="menu-item dropdown"><a class="nav__link" id="about" href="about.php">About Us</a>
                    <ul class="sub-nav" >
                       <li><a class="sub-nav__link" href="about.php#miss">Mission </a></li>
                        <li><a class="sub-nav__link" href="about.php#viss">Vision</li>
                        <li><a class="sub-nav__link" href="about.php#cause">Our Causes</a></li>
                    </ul>
            
                  </li>

                  <li class="menu-item "><a class="nav__link fw-bolder" id="donate" href="donation.php">DONATION</a>
                  <li class="menu-item "><a class="nav__link fw-bolder" id="dona" href="upcoming.html">UPCOMING EVENTS</a></li>
                  <li class="menu-item "><a class="nav__link fw-bolder" id="join" href="signup.php">JOIN US</a>
                  <li class="menu-item "><a class="nav__link fw-bolder" id="login" href="login.php">LOGIN</a> 
                  
                  </li>
                </ul>
              </div>
    </nav>
    <div class="body">
      <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login</h3>
                        <form action="" method="POST">
  
                            <div class="col-md-12 col-sm-4">
                               <input class="form-control" type="text" name="username" placeholder="username" required>
                            </div>
    
                           <div class="col-md-12 col-sm-4">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                           </div>

                           <div class="col-md-12 mt-3 col-sm-4">
                            <label class="mb-3 mr-1" for="gender">Yet to have an account?<span><a id="log" href="signup.php">Join us today</a></span></label>
                          </div>
  
                          <div class="form-button mt-3">
                              <button id="register" type="submit" class="btn" name="submit">LOGIN</button>
                              <!-- <input type="submit" class="btn" value="submit" name="submit"> -->
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
  
  </div>
  
  
    </div>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
  <script>
    AOS.init();
  </script>
</body>
</html>