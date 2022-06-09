<?php 
  if(!isset($_SESSION)) {
    session_start();
  }

  include_once 'dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIVE</title>
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
    <a id="button"></a>
</head>
<body  style="font-family: 'Acme', sans-serif;">
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
    <section>
        <img class="img-fluid" src="./imgs/donation-3.jpg">
        <div class="sub-section pb-5">
          <h1 class="fw-bolder fs-1">Other Ways you can give</h1>
           <p class="fw-bold text-dark">There are many ways you can help advance our work in the community that go beyond<br> writing a check. Here are a few:</p>
           <div class="container text-center mt-5">
               <div class="row btm-spacer">
                <div class="col-md-4">
                  <div class="center link_1">
                    <a href="#start_a_fund"  style="text-decoration: none;">
                      <span class="fa-stack fa-3x">
                        <i class="fas fa-leaf fa-stack-1x fa-inverse trq"></i>
                      </span>
                      <h4 class="h4-3col text-dark">Start a Fundraiser
                      </h4>
                    </a>
                   </div>
                </div>
                   <div class="col-md-4 ">
                     <a href="#donate_stock" style="text-decoration: none;">
                      <div class="center">
                        <span class="fa-stack fa-3x">
                          <i class="fa fa-seedling fa-stack-1x fa-inverse trq"></i>
                        </span>
                        <h4 class="h4-3col text-dark">Donate Stock
                        </h4>
                 </div>
                     </a>
                   </div>
                   <div class="col-md-4">
                     <a href="#donate_property" style="text-decoration: none;">
                        <div class="center">
                                <span class="fa-stack fa-3x">
                                <i class="fa fa-home fa-stack-1x fa-inverse trq"></i>
                            </span>
                            <h4 class="h4-3col text-dark">Donate Properties</h4>
                        </div> 
                     </a>
                   </div>

  <div id="start_a_fund"></div>
               </div>
           </div>   
        </div>
        <div class="containers">
            <img src="imgs/blue_grunge_pattern_background.jpg" alt="Nature" class="start_a_fund">
            <div class="center text-block mb-2">
              <span class="fa-stack fa-3x">
                <i class="fas fa-leaf fa-stack-1x fa-inverse trq"></i>
        </span>
  

              <h4 class="text-dark h4-3col">Start a Fundraiser</h4>
              <div id="donate_stock"></div>

              <p class="text-dark   f-1"> You can set up your own fundraiser online, 
                share with your network, and invite friends and family to join great work happening right here at Covenant Helpers Foundation.<br>
                Please contact Flora (+23408138273317) to get started.
            </p>
            
            
            </div>         
          </div>
          </div>
          <div class="container text-center ">
            <div class="center">
              <span class="fa-stack fa-3x">
                <i class="fa fa-seedling fa-stack-1x fa-inverse trq"></i>
              </span>
              <div id="donate_property"></div>
              <h4 class="h4-3col text-dark">Donate Stock</h4>
              <p class="p-3col text-dark">Donating stock and/or dividends is an excellent way to support Erie House and take advantage of
                tax benefits available to you.
                Please contact Flora (+23408138273317) to get started.</p>
            </div><!-- center -->          
          </div><!-- col-md-4 -->
        </div><!-- row -->
          
          <div class="container-fluid text-center " style="background: #F0F0F0; border: 1px solid #F0F0F0">
            <div class="container text-center">
              <div class="center">
                <span class="fa-stack fa-3x">
                  <i class="fa fa-home fa-stack-1x fa-inverse trq"></i>
                </span>
                <h4 class="h4-3col text-dark">Donate Properties</h4>
                <p class="p-3col text-dark">Donation can come in any form within your means, could be a used car, items, machinery, home appliances and so on , always remember Giving is living.

                  Kindly note you can donate any properties not mentioned here.
                  
                  Please contact Flora (+23408138273317) if you wish to donate any of your properties.
                  </p>
              </div><!-- center -->          
            </div><!-- col-md-4 -->
          </div><!-- row -->
          </div>
          
    </section>
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
                      <li><a class="text-dark" href="donation.html">Donate</a></li>
                      <li><a class="text-dark" href="#">Volunteer</a></li>
                      <li><a class="text-dark"  href="contact.html">Contact</a></li>
                      <li><a class="text-dark" href="about.html">About Us</a></li>
                      <br>
                      <li><span>Yet to be a member?</span> <a class="fw-bolder text-center" id="sign-up" href="signup.html">JOIN US</a> </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-4"  style="margin-top: 100px;">
                <img src="./imgs/convenancct.png" class="img-fluid">
                </div>
            </div>
        </div>
        <button id="mybtn" ><a href="#"><i class="fa-brands fa-whatsapp"></i><span>Need help? <b>Chat with us</b> </span></a></button>
             <div class="sub_sec-1 text-center pt-5">© 2022 Covenant Helpers Foundation</div>
             <div class="sub_sec-2 text-center pt-3">Website powered by <a class="text-info" href="https://wa.me/message/WJKJQCFDQBF3E1">Omokehinde_dev</a></div>
          </footer>
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