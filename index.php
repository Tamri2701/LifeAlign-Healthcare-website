

<?php 
session_start(); // Start the session
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LifeAlign</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
           #logo{
    width: 300px;
           }
    /* #footerlogo{
    width: 200px;
    } */
    </style>
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.php">
                                    <img id="logo" src="assets/img/logo/newlogo.png" alt="">
                                    
                                </a>
                            </div>
                        </div>
                        <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .auth {
            display: flex;
            align-items: center;
        }
        .user {
            background: #1b5e20;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        .logout {
            background: red;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="donation.php">Donation</a></li>
                                            <li><a href="blog.php">Blog</a>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="auth">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="user">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <a href="logout.php" class="logout">Logout</a>
            <?php else: ?>
                <a href="login.php" class="user">Sign up / Log in</a>
            <?php endif; ?>
        </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <!-- Video icon -->
                                <div class="video-icon">
                                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Health is wealth  keep it healthy </h1>
                                    <p data-animation="fadeInUp" data-delay=".3s">We were rewriting <br>the rules of healthcare.<br></p>
                                    <a href="appointment.html" class="btn" data-animation="fadeInLeft" data-delay=".3s">Make an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Slider Single -->
            <div class="single-slider d-flex align-items-center slider-height">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                         <div class="hero-wrapper">
                            <!-- Video icon -->
                            <div class="video-icon">
                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".3s">Your Health is our priority </h1>
                                <p data-animation="fadeInUp" data-delay=".4s">With our Creative and your<br>believe we can make life beautiful.</p>
                                <a href="services.php" class="btn" data-animation="fadeInLeft" data-delay=".3s">Take a Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!-- Slider Area End -->
<!--? About-2 Area Start -->
<div class="about-area2 section-padding40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <img src="assets/img/gallery/about.png" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <h2>Create a healthy 
                        life you love!</h2>
                    </div>
                    <p class="pera-top mb-40">Everything at one place for your ease.</p>
                    <p class="pera-bottom mb-30">Know about desieses, Get your Appointment,<br> Read health related blogs, Register yourself for the organ donation,<br> Manage your reports and Know about nearby hospitals, Many more. </p>
                    <div class="icon-about">
                     <img src="assets/img/icon/about1.svg" alt="" class=" mr-20">
                     <img src="Projects\Healthcare\assets\img\gallery\about2.png" alt="">
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- About-2 Area End -->
<section class="wantToWork-area section-bg3" data-background="assets/img/gallery/section_bg01.png">
    <div class="container">
        <div class="wants-wrapper w-padding2">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Happy mind <br>healthy life</h2>
                        <p>So take a deep breath and be happy<br> Get your checkup today.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="services.php" class="btn f-right sm-left">Take a Service</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Services Area Start -->
<div class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="Hearthealth.php">Heart Health</a></h5>
                        <p>"Your heart works hard for you every day. Simple activities like walking or stretching can keep it strong and healthy for years to come."</p>
                        <a href="Hearthealth.php" class="plus-btn"><i class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services2.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="MentalFitness.php">Mental Fitness</a></h5>
                        <p>"Keeping your mind active with puzzles, reading, or learning new skills helps improve focus, memory, and overall mental health."</p>
                        <a href="MentalFitness.php" class="plus-btn"><i class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services3.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="PhysicalFitness.php">Physical Fitness</a></h5>
                        <p>"Fitness is the key to a healthy and energetic life. Regular exercise keeps your body strong, improves endurance, and boosts overall well-being."</p>
                        <a href="PhysicalFitness.php" class="plus-btn"><i class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->
<!--? Testimonial Area Start -->
<section class="testimonial-area testimonial-padding fix">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption">
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"I’ve become more active and mindful about my health thanks to the helpful tips and resources available here!"</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets/img/icon/testimonial.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Shresth Mishra</span>
                                    <p>Student at VIT Bhopal</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"This platform has completely changed the way I approach my health. The personalized guidance is amazing!"</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets/img/icon/testimonial.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Mayank Gohrana</span>
                                    <p>Software Engineer, Amazon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                </div>
            </div>
        </div>
    </div>
</section>    
<!--? Blog Area Start -->
<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-100">
                    <h2>Latest Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/meal plam.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a href="blog_details1.html">Your daily meal plan</a></h3>
                            <P>Creating a Sustainable Meal Plan for a Healthier Lifestyle</P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/helthy life.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a href="blog_details2.html">Food is a great source of  medicine</a></h3>
                            <P>Food as Medicine: The Key to a Healthier Life</P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="home-blog-single mb-40">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/veggis.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <h3><a href="blog_details3.html">Everyday diet plan</a></h3>
                            <P>Your Everyday Diet Plan: A Guide to Balanced Eating</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->
<!--? About Law Start-->
<section class="about-low-area mt-30">
    <div class="container">
        <div class="about-cap-wrapper">
            <div class="row">
                <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>100% satisfaction.</h2>
                        </div>
                        <p>Your satisfaction is our main motto and we are happy to help you.</p>
                        <a href="appointment.html" class="border-btn">Make an Appointment</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img">
                        <div class="about-font-img">
                            <img id="footerlogo" src="assets/img/gallery/doctor4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Law End-->
</main>
<footer>
    <div class="footer-wrappr section-bg3" data-background="assets/img/gallery/footer-bg.png">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="index.html"><img src="assets/img/logo/newlogo.png" alt=""></a>
                            </div>
                            <d iv class="header-area">
                                <div class="main-header main-header2">
                                    <div class="menu-main d-flex align-items-center justify-content-start">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2">
                                            <nav> 
                                                <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="services.php">Services</a></li>
                                                    <li><a href="donation.php">Donation</a></li>
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>  
                                </div>
                            </d>
                            <!-- social -->
                            <div class="footer-social mt-50">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mb-50">
                                <h4>Subscribe newsletter</h4>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>The care we provide, the life you have<br>Both are important for you and us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-10 ">
                            <div class="footer-copy-right">
                             <p>
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. <i class="fa fa-heart" aria-hidden="true"></i>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
<script src="./assets/js/chatbot.js"></script>

    </div>
</body>
</html>