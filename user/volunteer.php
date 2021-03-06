<?php 
  if(!isset($_SESSION)) {
    session_start();
  }

  include_once 'dbconnect.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // colecting data from post method of form submission //
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = mysqli_query($con, "INSERT INTO volunteer (fname, lname, company, address, phone, email, message) VALUES ('$fname', '$lname', '$company', '$address', '$phone', '$email', '$message')");

    $to = 'ukaegbuosinachi15@gmail.com';
    $subject = 'Volunteer Request'; 
    $from = mysqli_real_escape_string($con, $_POST['email']);

    mail($to, $subject, $message, $from);
    
    // Sending email
    if(mail($to, $subject, $message, $from)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }


    header("Location: volunteer_thanks.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteer</title>
    <link rel="icon" type="image/x-icon" href="imgs/favicon1.ico" />
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Terminal+Dosis" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Terminal+Dosis" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    

</head>
<body>
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
                  <li class="menu-item current-menu-item"><a class="nav__link" id="home" href="user.php">Home</a></li>
                  <li class="menu-item current-menu-item"><a class="nav__link" id="home" href="contact.php">Contact Us</a></li>
                  <li class="menu-item dropdown"><a class="nav__link" id="about" href="about.php">About Us</a>
                    <ul class="sub-nav" >
                       <li><a class="sub-nav__link" href="about.php#miss">Mission </a></li>
                        <li><a class="sub-nav__link" href="about.php#viss">Vision</li>
                        <li><a class="sub-nav__link" href="about.php#cause">Our Causes</a></li>
                    </ul>
            
                  </li>

                  <li class="menu-item "><a class="nav__link fw-bolder" id="donate" href="donation.php">DONATION</a></li>
                  <!-- <li class="menu-item "><a class="nav__link fw-bolder" id="join" href="signup.php">JOIN US</a>
                  <li class="menu-item "><a class="nav__link fw-bolder" id="login" href="login.php">LOGIN</a>  -->
                  <li class="menu-item "><a class="nav__link fw-bolder" id="login" href="userDashboard.php">DASHBOARD</a></li>
                  <li class="menu-item "><a class="nav__link fw-bolder" id="login" href="user_logout.php">LOGOUT</a></li>
                </ul>
              </div>
    </nav>
    <div class="donation-body"><br>
      <div class="container">
        <div class="row">
                <div class="col-sm-12">
                  <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content pt-1 mr-2">
                                <div class="form-items">
                                    <h3>Volunteer</h3>
                                    <p>Volunteers do not necessarily have the time; They just have the heart.</p>
                                    <form action="" method="POST">
              
                                        <div class="col-md-12 col-sm-4">
                                           <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-12 col-sm-4">
                                          <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                                       </div>

                                        <div class="col-md-12 col-sm-4">
                                            <input class="form-control" type="text" name="company" placeholder="Company" required>
                                        </div>

                                        <div class="col-md-12 col-sm-4">
                                          <input class="form-control" type="text" name="address" placeholder="Contact Address" required>
                                      </div>

                                  <div class="col-md-12 col-sm-4 mt-3">
                                    <input class="form-control" type="tel" name="phone" placeholder="Phone No" required>
                                </div>

                                <div class="col-md-12 col-sm-4">
                                  <input class="form-control" type="email" name="email" placeholder="Email" required>
                              </div>
                              <div class="input-box mt-4">    
                                <textarea name="message" placeholder="Your Message..." required=""></textarea>
                            </div>

                                      <div class="form-button mt-3">
                                          <button type="submit" class="btn" name="submit"><a id="register">Volunteer</a></button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                   </div>
                  </div>
                </div>

        </div>
      </div>
</div>
</div>
<footer>
  <div class="section-4">
    <div class="container">
        <div class="row">
            <div class="col-8 col-md-8 ">
                <ul class="mt-5"  style="display: inline-flex;  list-style-type: none; letter-spacing: 0.9rem;font-size: 30px;"> 
                  <li>
                   <a href="https://www.facebook.com/ThemovingpowerofGod/" target="blank"><i class="fa-brands fa-facebook-f text-dark"></i></a>
                  </li> 
                  <li>
                    <a href="https://youtube.com/channel/UCk6wD28Bp1EDTPO4S0UznoA" target="blank"><i class="fa-brands fa-youtube text-dark"></i></a>
                  </li>
                </ul>
                <ul class="lh-lg" style="list-style-type: none;"> 
                  <li><a class="text-dark" href="donation.php">Donate</a></li>
                  <li><a class="text-dark" href="volunteer.php">Volunteer</a></li>
                  <li><a class="text-dark"  href="contact.php">Contact</a></li>
                  <li><a class="text-dark" href="about.php">About Us</a></li>
                  <br>
                  <li><span>Yet to be a member?</span> <a class="fw-bolder text-center" id="sign-up" href="signup.php">JOIN US</a> </li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-4">
            <img src="./imgs/convenancct.png" class="img-fluid">
            </div>
        </div>
    </div>
     
         <div class="sub_sec-1 text-center pt-5">?? 2022 Covenant Helpers Foundation</div>
         <div class="sub_sec-2 text-center pt-3">Website powered by <a class="text-info" href="https://wa.me/message/WJKJQCFDQBF3E1">Omokehinde_dev</a></div>
      </footer>
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