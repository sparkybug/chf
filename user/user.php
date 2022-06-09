<?php 
    session_start();

    include_once 'dbconnect.php';

    if(!isset($_SESSION['userSession'])) {
        header("Location: ../index.php");
    }

    // $usersession = $_SESSION['userSession'];

    // $res = mysqli_query($con, "SELECT * FROM userTable WHERE username = '$username'". $usersession);
    // if($res === false) {
    //     echo mysqli_error();
    // }

    // $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
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
                    <li class="menu-item "><a class="nav__link fw-bolder" id="dona" href="upcoming.html">UPCOMING EVENTS</a></li>
                    <li class="menu-item "><a class="nav__link fw-bolder" id="login" href="userDashboard.php">DASHBOARD</a></li>
                    <li class="menu-item "><a class="nav__link fw-bolder" id="join" href="user_logout.php">LOGOUT</a></li>
                  </ul>
              
              
                </div>
      </nav>
        
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
               <img class="img-fluid w-100 " src="./imgs/ken1.jpg" >
                  <div class="carousel-caption   caption-1 fw-bold ">
                  <h2 class="fs-1 fw-bolder" id="do">Donate Now </h2><hr>
                  <p class="fs-5 container" style="margin-top: -65px;" id="do">Living is giving, never get tired of doing little things for others,
                    sometimes those little things occupy the biggest parts of their hearts.
                  </p>
                  <div class="sm-cap">
                    <div data-aos="fade-down" class="fs-3">Better World</div>
                    <div data-aos="fade-up" class="fs-3">For All Children</div>
                    <div data-aos="fade-up"><a href="donation.php" style="background: #ff0000; color: white; padding: 5px 7px 5px 7px" class="btn ">Donate</a></div>
                  </div>
                  <a class="do" id="volunteer" href="donation.php" target="blank"> Donate</a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img class="img-fluid w-100 " src="./imgs/ken2.jpg" >
                <div class="carousel-caption  caption-2 fw-bold ">
                  <h2 class="fs-1 fw-bolder" id="do">Upcoming Events </h2><hr>
                  <p class="fs-5 container" style="margin-top: -65px;" id="do">There are some people who live in a dream world, and there are some who face
                     reality; and then there are those who turn one into the other, see our Upcominge Events</p>
                     <div class="sm-cap">
                      <div data-aos="fade-down" class="fs-3">New Hope For </div>
                      <div data-aos="fade-up" class="fs-3">Coming Future</div>
                      <div data-aos="fade-up"><a href="volunteer.php" style="background: #252C0C; color: white; padding: 5px 7px 5px 7px" class="btn ">Volunteer</a></div>

                    </div>
                  <a class="do" id="support" href="#Upcoming">Upcoming Events</a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img class="img-fluid w-100 " src="./imgs/ken3.jpg" >
                <div class="carousel-caption  caption-3 fw-bold ">
                  <h2 class="fs-1 fw-bolder" id="do">Volunteer</h2><hr>
                  <p class="fs-5 container" style="margin-top: -65px;" id="do">The heart of a volunteer is not measured in size,
                    but by the depth of the commitment to make a diffrence in the lives of others.
                  </p>
                  <div class="sm-cap">
                    <div data-aos="fade-down" class="fs-3">Small Effort</div>
                    <div data-aos="fade-up" class="fs-3">Make Big Changes</div>
                    <div data-aos="fade-up"><a href="#venue" style="background: #452C0C; color: white; padding: 5px 7px 5px 7px" class="btn ">Support</a></div>
                  </div>
                  <a class="do" id="volunteer"  href="volunteer.html" target="blank">Volunteer</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
      </button>
    </div>
      <span class="sm-donate">
      <h6 class="mt-2 mb-2 container "> 
        A gift opens the way and ushers the giver into the presence of the Great.<b><i>proverb 18: 16</i></b>
      </h6>
    </span>
      <div class="section-1 ">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-10">
              <hr class="mt-5 pt-1" id="hr-color">
                    <h3 class="lh-base">
                      Covenant Helpers Foundation is under a convenant with God to recieve the fulfillment of their dreams by contributing
                      to fulfill the dreams of the less Priviledge. Join us now and benefit from the reward of our convenant with God daily
                        in every area of your life. 
                        <span class="sm-view text-center mt-4 mb-4"> 
                        <i class="fas fa-hands-helping"></i>
                       </span>
                      Grab this opportunity and see how your life turns around for good, give it a try your testimonies will convince you.<br><br>
                      We empower the people we work alongside to build powerful communities and also provide <span style="color: #009788;padding:5px;">Financial Empowerment</span> to the people.
                    </h3><br>
                    <br>
                    <span class="">
                       <a href="https://www.facebook.com/groups/1938364783034525/?ref=share" target="blank" id="community">Join a Community</a>
                       <a href="donation.html" id="community-2">Donate Today</a>
                     </span>
                    <hr class="mt-5 pt-1" id="hr-color" >
                  </div>
                </div>
              </div>
        </div>
        <h1 class="text-center fw-bolder fs-3 mt-5 mb-5">You Can Partner With Us In Changing The World!</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-md-6 section-2">
          <div class="container pb-4" style="background: #fff; width: 80%;">
          <img src="./imgs/close-up-smiley-african-kid.jpg" class="img-fluid  pt-5 mt-5 mb-5 rounded mx-auto d-block" alt="...">
              <h2 class="fw-bolder">Children & Youth</h2>
              <p class="text-dark">We work with young people from infancy through high school
                graduation to equip them with tools and resources to build a bright future,
                including educational programs and activities, mentoring, and family support. </p>
          </div>
        </div>
        <div class="col-sm-4 col-md-6 section-2-1">
          <div class="container pb-4"  style=" width: 80%;">
            <img src="./imgs/gentle-stylish-couple-are-having-walk-autumn-park.jpg" class="img-fluid pt-5 mr-5 mt-5 mb-5 rounded mx-auto d-block" alt="...">
            <h2 class="fw-bolder"> Mental Health & Community Wellness</h2>
            <p class="text-dark">Healthy communities are empowered communities. We make a healthy lifestyle more accessible with workshops,
              support groups, and counseling, all through a trauma-informed and culturally-sensitive lens. </p>
            </div>

        </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-md-6 section-2-3">
        <div class="container pb-4"  style=" width: 80%;">
        <img src="./imgs/kid_HIM.png" class="img-fluid mr-5 mt-5 mb-5 rounded mx-auto d-block" alt="...">
        <h2 class="text-light">Community Resources & Empowerment</h2>
        <p>We equip our community with the tools and information needed to thrive in the face of
          adversity, including “Know Your Rights” trainings and direct outreach.  </p>
        </div>
      </div>
      <div class="col-sm-4 col-md-6 section-2-4">
        <div class="container pb-4"  style=" width: 80%;">
        <img src="./imgs/portrait-little-homeless-boy.jpg" class="img-fluid  mr-5 mt-5 mb-5 rounded mx-auto d-block" alt="...">
        <h2 class="text-light">Make a Difference</h2>
        <p class="text-dark">Never underestimate the difference you can make in the lives of others. Step forward,
          reach out, and help. This week reach someone that might need a lift..<br>
          Kindness can transform someone's dark moment with a blaze of light. You'll never know how much your caring matters </p>
        </div>
      </div>
      <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-md-6 section-2">
      <div class="container " style="background: #fff; width: 80%;">
      <img src="./imgs/healthC.webp" class="img-fluid  pt-5 mt-5 mb-5 rounded mx-auto d-block" alt="...">
          <h2 class="fw-bolder">Affordable Healthcare</h2>
          <p class="text-dark">Poor health is not caused by something you don’t have; it’s caused by disturbing something that you already have.<p> Healthy is not something that you need to get, it’s something you have already if you don’t disturb it.Take care of your body. It’s the only place you have to live, together we can stay healthy!.</p></p>
      </div>
    </div>
    <div class="col-sm-4 col-md-6 section-2-1">
      <div class="container pb-4"  style=" width: 80%;">
        <img src="./imgs/foodies.webp" class="img-fluid pt-5 mr-5 mt-5 mb-5 rounded mx-auto d-block" alt="...">
        <h2 class="fw-bolder"> Food Availability</h2>
        <p class="text-dark">Eating regularly is a non-negotiable activity and countries that cannot feed their people are unlikely to be reasonable about it. We Provide food for people in nearby communities.
         </p>
        </div>

    </div>
</div>
</div>
  </div>
  </div>

      <div class="section-3" ><br><br>
                <div class="container pb-5 ">
                <div class="row" >
                    <div class="col-sm-4 col-md-6 box_1  " >
                      <h3 class="fw-bold text-center pt-4 text-light ">Volunteer with us</h3>
                        <p class="lh-lg text-muted pt-3">Volunteers do not necessarily have the time, they just have the heart.</p>
                          <button type="button" 
                          class="w-100" id="volunteer"><a id="volunteer" href="volunteer.php">
                            Volunteer </a>
                        </button>
                            </div>
                          <div class="col-sm-4 col-md-6 box_2  ">
                            <h3 class="fw-bold text-center pt-4 text-light">Support our Work</h3>
                              <p class="lh-lg text-muted pt-3">I want you to know that someone out there cares</p>
                                <button type="button" class="w-100 " id="volunteer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                  Support Our Work
                                </button>         <span id="venue"></span>
                                </div>  
                                </div>  
                             
                        </div>    
        </div> 
        <section>
        <div class="ava-main-container mb-5">
  <div class="ms-Grid"> 
    <div class="ms-Grid-row">
      <div class="ms-Grid-col ms-u-sm12 ms-u-md12 ms-u-lg12">
        <!-- 1-column: --> 
        <div class="ava-image-text-banner">
          <div class="ava-banner-image"><img src="https://image.ibb.co/naNqCa/news_b.png" alt=""></div>
          <div class="ava-banner-txt-wrap">
            <div class="ava-banner-txt-cont">
              <div class="ava-banner-txt">
                <div>Lift yourself by lifting others, as a member receive 15% on any amount of your referral donations. Let us change lives by spreading the importance of being a helper to the less Priviledge that cannot survive without you, be a savior to someone out there, the more people you can save through your donations or referrals the more rewards you will get from God and will keep receiving more referral bonuses, isn't that awesome. Click below to learn more.<br><span><a href="donation.php" style="background-color: #009788; color: white;"  class="btn mt-2">Learn more</a></span ></div>
              </div>
            </div> <span id="Upcoming"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        </section>
        <h1 class="text-center fw-bolder fs-1">Upcoming Events</h1>
      <div class="bodys">
        <div class="overlay"></div>
        <div class="card-wrap "><a class="card link__"  style="background-image: url('./imgs/p2p.webp')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Peer</div>
              <div class="card__text">to peer funding</div>
            </div></a><a class="card link__" style="background-image: url('./imgs/mail.webp')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Direct</div>
              <div class="card__text">Mail Appeals</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Miami,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Jumbo</div>
              <div class="card__text">Sales</div>
            </div></a><a class="card link__ " style="background-image: url('https://source.unsplash.com/600x600/?Sydney,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Talent</div>
              <div class="card__text">Show</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Tehran,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Easter</div>
              <div class="card__text">egg Hunt</div>
            </div></a><a class="card link__"  style="background-image: url('./imgs/raffles.webp')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">50/50</div>
              <div class="card__text">Raffles</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Munich,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Photo</div>
              <div class="card__text">Pledge</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Maui,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Daily</div>
              <div class="card__text">Indulgence Drop</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Auckland,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Candle</div>
              <div class="card__text">Selling</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Bologna,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Buck-a-pound</div>
              <div class="card__text">Fundraiser</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Guangzhou,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Envelope</div>
              <div class="card__text">Fundraiser</div>
            </div></a><a class="card link__" style="background-image: url('https://source.unsplash.com/600x600/?Buenos Aires,home')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Lost</div>
              <div class="card__text">Lost Tresure</div>
            </div></a><a class="card link__" style="background-image: url('./imgs/game.jpg')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Guessing</div>
              <div class="card__text">Games</div>
            </div></a><a class="card link__" style="background-image: url('./imgs/church.jpg')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">Christian</div>
              <div class="card__text">Speed dating</div>
            </div></a><a class="card link__" style="background-image: url('./imgs/nshirt.webp')" href="upcoming.html">
            <div class="card__overlay"></div>
            <div class="card__info">
              <div class="card__title">T-shirt</div>
              <div class="card__text">Fundraising</div>
            </div></a>
        </div>
      </div>
      <div class="main-container">

<div class="cardss">
  <div class="cardd card-1">
    <div class="card__icon"><i class="fas fa-dove"></i></div>
    <div class="card__titles mt-5">Connect with the convenient of helpers foundation by investing contributing your donation for it will surely comeback in multiplication. Philippians ch 4 d 17, The only question to get help is to give help because what you give is what you get so increase yourself by increasing others.
    </div>

  </div>

  <div class="cardd card-4">
    <div class="card__icon4"><i class="fas fa-piggy-bank"></i></div>
    <div class="card__titles mt-5">Come and plant on a fertile ground. Your donation is your seed that garments, grows and produce a lot of fruits if you do not plant there's no how you can harvest, I know you have been giving and planting on other grounds but I assure you to plant on this ground and see the difference because every ground have different level of fertility.</div>

  </div>
  <div class="cardd card-5">
    <div class="card__icon5"><i class="fas fa-ribbon"></i></div>
    <div class="card__titles mt-5">Your good deeds counts as well as your bad deeds so let the reword of your good deeds count more for you...... Its the action you take that makes you the best among the rest. </div>

  </div>
  <div class="cardd card-1">
    <div class="card__icon6"><i class="	fas fa-gift"></i></div>
    <div class="card__titles mt-5">Write down a dream list of what you are expecting from God and join convenant helpers foundation by Opening your donation account with us to have the record that proves your contribution in fulfilling the dreams of the needy, you can choose a donation plan of  monthly, if you don't want to be on a  plan you  can also join through the part time account, the amount in your donation account determines the reward that you will be recieving from God, he will multiply your contribution to make your own dreams come true one after the other as it's written in your dream list</div>

  </div>
</div>
</div>
        <section class="testimonial text-center">
          <div class="container">
      
              <div id="testimonies" class="revslid white-heading fs-1 text-bold" style="font-family:Merriweather Sans;">
                  Testimonies
              </div>
              <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
              
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                          <div class="testimonial4_slide">
                              <img src="./imgs/t-man.webp" class="img-circle img-responsive" />
                              <p style="font-family:Merriweather Sans,">"I want to appreciate the founder of CHF(Covenant Helpers Foundation) who has been able to attest of her philanthropic works/gestures because I am a living witness to the giant strides of the foundation..Covenant Helpers Foundation in her capacity is touching the lives of less opportunes, the vulnerable in our society such as orphans, widows, those who have financial challenge &amp; the unemployed.
                              I see CHF within the nearest future to be globally recognize as an organization that is uplighting lives in every facet of the society to the glory of God the Father.." </p>
                              <h2 style="font-family:Merriweather Sans; color:white; letter-spacing: 2.5px;"><i>Mr Johnson </i></h2>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="testimonial4_slide">
                              <img src="./imgs/t2-man.webp" class="img-circle img-responsive" /><p style="font-family:Merriweather Sans;">"The Covenant Helpers Foundation (CHF)has really touched lives , especially the downtrodden living in the remotest part of lagos slum (makoko) one of the biggest slum in West Africa. The foundation has brought succor and rekindle hope of the poorest of the poor in our society. Kids numbering in their hundreds have been sent back to school, books and writing materials worth thousand of naira have been distributed to indigent students across several schools
                              abadoned &amp; misplaced kids have been reunited with their families.
                              The Covenant Helpers Foundation is a blessing to Humanity."</p>
                              <h2 style="font-family:Merriweather Sans; color:white; letter-spacing: 2.5px;"><i>Mr Richard</i></h2>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="testimonial4_slide">
                              <img src="./imgs/w-man.webp" class="img-circle img-responsive" />
                              <p style="font-family:Merriweather Sans;">"I am very pleased to state that my experience with Covenant Helpers Foundation has been one of joy, pride, fulfillment and the total expression of love and charity. Associating with Covenant Helpers Foundation has taught me the true meaning of giving back to the society.

                              I totally appreciate C.H Foundation for the excellent work being carried out in uplifting many under-privileged children and families. By providing for the daily upkeep and shelter of several homeless and needy children, further providing them with sound education and as well better life opportunities to translate them from hopelessness to optimism and grace.

                              Covenant Helpers Foundation is helping the girl-child to achieve and become better. Their regular distribution of sanitary pads and continuous educational workshops in primary and secondary schools is one to marvel at. Widows are not also left out of their philanthropic gestures, as food items and cash are regularly distributed to aid striving mothers without any form of support.

                              C.H Foundation is not only investing but ensuring a better future for Edo State cum Nigeria as a whole. My sincerest prayer is that they continue to wax stronger and stronger." </p>
                              <h2 style="font-family:Merriweather Sans; color:white; letter-spacing: 2.5px;"><i>Miss Mariam</i></h2>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="testimonial4_slide">
                              <img src="./imgs/w2-man.webp" class="img-circle img-responsive" />
                              <p style="font-family:Merriweather Sans;">"Covenant Helpers Foundation has really helped me and my bussiness, I started my bussiness with 50,000 donation from Covenant Helpers Foundation and now i make more and bussiness is flourishing. Thank God for this beautiful Organization, may God continue to bless you." </p>
                              <h2 style="font-family:Merriweather Sans; color:white; letter-spacing: 2.5px;"><i>Mrs Mubarak</i></h2>
                          </div>
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                  </a>
              </div>
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
                        <li><a class="text-dark" href="donation.php">Donate</a></li>
                        <li><a class="text-dark" href="volunteer.php">Volunteer</a></li>
                        <li><a class="text-dark"  href="contact.php">Contact</a></li>
                        <li><a class="text-dark" href="about.php">About Us</a></li>
                        <br>
                        <li><span>Yet to be a member?</span> <a class="fw-bolder " id="sign-up" href="signup.php">JOIN US</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-4 col-md-4" style="margin-top: 100px;">
                      <img src="./imgs/convenancct.png" class="img-fluid">
                  </div>
              </div>
          </div>
          <div>
            <a style="font-size: 2em;position: fixed; display: inline-block; z-index: 100;" href="#"><i  class="fa-brands fa-whatsapp"></i></a>
      </div>
      <button id="mybtn" ><a href="https://chat.whatsapp.com/CRJMlM8Runl6DXvh9w01ZX" target="blank"><i class="fa-brands fa-whatsapp"></i><span>Need help? <b>Chat with us</b> </span></a></button>
              <div class="sub_sec-1 text-center pt-5">© 2022 Covenant Helpers Foundation <a href="admin/index.php" style="text-decoration: none; color: #000;">admin</a></div>
              <div class="sub_sec-2 text-center pt-3">Website powered by <a class="text-info" href="https://wa.me/message/WJKJQCFDQBF3E1">Omokehinde_dev</a></div>
            </footer>
       
          </div>
          <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content" style="background: #F4DEC7;">
                <div class="modal-header">
                  <h5 class="modal-title fw-bold fs-2" id="staticBackdropLabel" style="color: black;">Support</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                  <div class="container">
                    <form>
                      <h2 style="color: black" class="fs-1 fw-bold">Contact Us</h2><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="first" style="color: black;" class="fw-bold">First Name</label><br>
                            <input type="text" class="form-control" placeholder="" id="fname">
                          </div>
                        </div>
                  
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="last" style="color: black;" class="fw-bold">Last Name</label><br>
                            <input type="text" class="form-control" placeholder="" id="lname">
                          </div>
                        </div>
                      </div>
                  
                  
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="company" style="color: black;" class="fw-bold mt-2">Company</label><br>
                            <input type="text" class="form-control" placeholder="" id="company">
                          </div>
                  
                  
                        </div>
                  
                        <div class="col-md-6">
                  
                          <div class="form-group">
                            <label for="phone" style="color: black;" class="fw-bold mt-2">Phone Number</label><br>
                            <input type="tel" class="form-control" id="phone" placeholder="phone">
                          </div>
                        </div>
                      </div>
                  
                  
                      <div class="row">
                        <div class="col-md-6">
                  
                          <div class="form-group">
                            <label for="email" style="color: black;"class="fw-bold mt-2">Email address</label><br>
                            <input type="email" class="form-control" id="email" placeholder="email">
                          </div>
                        </div>
                  
                        <div class="col-md-6">
                          <div class="form-group mt-2">
                            <label style="color: black;" class="fw-bold">I'll like to support</label><br>
                            <input type="" class="form-control" id="smessage" placeholder="What support are you rendering...">
                          </div>
                  
                        </div><br>
                      </div>
                  
                  
                      <label style="color: black;" for="contact-preference">When is the best time of day to reach you?</label>
                              <div class="radio">
                                    <label  style="color: black;">
                                       <input type="radio" name="contact-preference" id="contact-preference" value="am" checked>Morning
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label  style="color: black;">
                                       <input  type="radio" name="contact-preference" id="contact-preference" value="pm" checked>Evening
                                    </label>
                                  </div>
                                  <button id="donate" type="submit" class="btn mt-3" style="background-color: black; color: white; ">Submit</button>
                                </form>
                              </div>
                        </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
            </div>
        
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.1/flickity.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script src="upcoming.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
      <script>
      AOS.init();
      </script>
  </body>
</html>
