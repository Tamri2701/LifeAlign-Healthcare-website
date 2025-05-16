<?php 
session_start(); // Start the session
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
 <meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>Health | Template</title>
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

 <!-- CSS here -->
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
 <link rel="stylesheet" href="assets/css/slicknav.css">
 <link rel="stylesheet" href="assets/css/animate.min.css">
 <link rel="stylesheet" href="assets/css/magnific-popup.css">
 <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
 <link rel="stylesheet" href="assets/css/themify-icons.css">
 <link rel="stylesheet" href="assets/css/slick.css">
 <link rel="stylesheet" href="assets/css/nice-select.css">
 <link rel="stylesheet" href="assets/css/style.css">
 <!-- <style>
  .image-container {
    align-items: stretch;
    text-align: justify;
    margin-bottom: 20px;
}

.meal-plan-image {
    width: 100%;
    max-width: 400px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
} -->
 <!-- </style> -->
 <style>
  #logo{
width: 300px;
}
</style>
</head>

<body>
 <!--? Preloader Start -->
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
        
          <div class="col-xl-2 col-lg-2 col-md-1">
            <div class="logo">
              <a href="index.html"><img id="logo" src="assets/img/logo/newlogo.png" alt=""></a>
            </div>
          </div>
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
  <div class="slider-area slider-area2">
   <div class="slider-active dot-style">
     <!-- Slider Single -->
     <div class="single-slider  d-flex align-items-center slider-height2">
       <div class="container">
         <div class="row align-items-center">
           <div class="col-xl-7 col-lg-8 col-md-10 ">
            <div class="hero-wrapper">
             <div class="hero__caption">
               <h1 data-animation="fadeInUp" data-delay=".3s">Blog Details</h1>
               <p data-animation="fadeInUp" data-delay=".6s">Knowledge should be complete<br>Complete your Knowledgeby getting Everything</p>
               <!-- <div class="image-container">
                <img src="blog1.png" alt="Meal Plan Image" class="meal-plan-image">
                </div> -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>    
 </div>
</div>
<!-- Slider Area End -->
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
 <div class="container">
  <div class="row">
   <div class="col-lg-8 posts-list">
    <div class="single-post">
     <div class="feature-img">
      <img class="img-fluid" src="imges/hi.jpg" alt="">
    </div>
    <div class="blog_details">
      <h2 style="color: #528cf0;"><u>Your Everyday Diet Plan: A Guide to Balanced Eating</u>
     </h2>
     <ul class="blog-info-link mt-3 mb-4">
       <li><a href="#"><i class="fa fa-user"></i> Tania, Delhi</a></li>
       <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
     </ul>
     <p class="excert">
        Maintaining a balanced diet doesn’t have to be complicated or time-consuming. An everyday diet plan focuses on nourishing your body with essential nutrients while fitting into your daily routine. By making smart choices and planning ahead, you can enjoy delicious, wholesome meals that fuel your day and support long-term health.
    </p>
     <p>
     <strong><u>The Basics of a Balanced Diet:</u></strong><br>
     A healthy diet includes the following essential components:
      </p>
     <div class="quote-wrapper">
       <div class="quotes">
        <strong><i>Proteins:</i></strong> For muscle repair and energy (e.g., eggs, chicken, fish, lentils, and tofu).<br>
        <strong><i>Carbohydrates: </i> </strong>For sustained energy (e.g., whole grains, oats, quinoa, and sweet potatoes).<br>
        <strong><i>Healthy Fats:</i> </strong>For brain health and hormone regulation (e.g., avocado, nuts, seeds, and olive oil).<br>
        <strong><i>Fruits and Vegetables: </i></strong>Packed with vitamins, minerals, and antioxidants.<br>
        <strong><i>Hydration:</i> </strong>Water is crucial for overall body function.<br>
      </div>
    </div>
    <p>
    <strong><u>Sample Everyday Diet Plan:</u></strong><br>
    Here’s a simple diet plan you can follow every day:<br>

    <strong>Morning (7:00–8:00 AM): Start Strong</strong><br>
     Drink: A glass of warm water with lemon to boost metabolism.<br>
    Breakfast:<br>
    Option 1: A bowl of oatmeal topped with fresh fruits and a handful of nuts.<br>
    Option 2: Whole-grain toast with avocado and a poached egg.<br>
    Option 3: Smoothie made with spinach, banana, almond milk, and chia seeds.
    <br>
    <strong>Mid-Morning Snack (10:00–11:00 AM): Keep It Light</strong><br>
     A handful of almonds or walnuts.<br>
    A piece of fresh fruit, such as an apple or orange.<br>
    <strong>Lunch (1:00–2:00 PM): Stay Balanced</strong><br>
    Main Dish:
    Grilled chicken or fish with quinoa and a side of steamed vegetables.<br>
    Lentil curry with brown rice and a cucumber salad.<br>
    Add-Ons: Include a bowl of yogurt or a light soup for extra nutrients.<br>
    <strong>Afternoon Snack (4:00–5:00 PM): Boost Energy</strong><br>
    Greek yogurt with a drizzle of honey and some berries.<br>
    A small portion of dark chocolate and green tea.<br>
    <strong>Dinner (7:00–8:00 PM): Keep It Light and Nutritious</strong><br>
    Option 1: Baked salmon with roasted vegetables (like broccoli and carrots).<br>
    Option 2: A hearty salad with mixed greens, chickpeas, grilled chicken, and olive oil dressing.<br>
    Option 3: Stir-fried tofu or paneer with whole-grain noodles.<br>
    <strong>Evening Snack (If Hungry)</strong><br>
    A cup of warm milk or herbal tea with a small handful of seeds (like sunflower or flaxseeds).
    </p>

    <p><strong><u>Tips for Sticking to Your Diet Plan</u></strong></p>
   <p>
    <Strong>Prep Ahead:</Strong><br>
    Meal prep for the week to save time and ensure healthy choices.<br>
    <Strong>Portion Control:</Strong><br>
    Eat mindfully and avoid overeating by sticking to reasonable portions.<br>
    <Strong>Stay Hydrated: </Strong><br>
    Drink at least 8 glasses of water throughout the day.<br>
    <Strong>Limit Processed Foods: </Strong><br>
    Minimize packaged snacks, sugary drinks, and fried foods.<br>
    <Strong>Listen to Your Body: </Strong><br>
    Eat when you’re hungry and stop when you’re full.<br>
    </p>

   <p><strong><u>Why an Everyday Diet Plan Matters</u></strong></p>
   <p>A consistent and balanced daily diet ensures that your body gets all the nutrients it needs to function optimally. It improves energy levels, supports mental clarity, strengthens immunity, and helps maintain a healthy weight.</p>

   <p><strong><u>Final Thoughts</u></strong></p>
   <p>An everyday diet plan isn’t about restriction—it’s about balance. Focus on nourishing your body with wholesome foods, and don’t forget to enjoy the process. Over time, these small, consistent steps will lead to long-term health and wellness.</p>
 </div>
</div>
<div class="navigation-top">
 <div class="d-sm-flex justify-content-between text-center">
  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
  people like this</p>
  <div class="col-sm-4 text-center my-2 my-sm-0">
   <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
 </div>
 <ul class="social-icons">
   <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
 </ul>
</div>
<div class="navigation-area">
  <div class="row">
   <div
   class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
   <div class="thumb">
     <a href="blog_details2.html">
      <img class="img-fluid" src="assets/img/post/preview.png" alt="">
    </a>
  </div>
  <div class="arrow">
   <a href="blog_details2.html">
    <span class="lnr text-white ti-arrow-left"></span>
  </a>
</div>
<div class="detials">
 <p>Prev Post</p>
 <a href="blog_details2.html">
  <h4 style="color: #2d2d2d;">Food as Medicine</h4>
</a>
</div>
</div>
<div
class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
<div class="detials">
 <p>Next Post</p>
 <a href="index.html">
  <h4 style="color: #2d2d2d;">home</h4>
</a>
</div>
<div class="arrow">
 <a href="index.html">
  <span class="lnr text-white ti-arrow-right"></span>
</a>
</div>
<div class="thumb">
 <a href="index.html">
  <img class="img-fluid" src="assets/img/post/next.png" alt="">
</a>
</div>
</div>
</div>
</div>
</div>
<div class="comments-area">
 <h4>05 Comments</h4>
 <div class="comment-list">
  <div class="single-comment justify-content-between d-flex">
   <div class="user justify-content-between d-flex">
    <div class="thumb">
     <img src="assets/img/comment/comment_1.png" alt="">
   </div>
   <div class="desc">
     <p class="comment">
      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
    </p>
    <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
       <h5>
        <a href="#">Emilly Blunt</a>
      </h5>
      <p class="date">December 4, 2017 at 3:12 pm </p>
    </div>
    <div class="reply-btn">
     <a href="#" class="btn-reply text-uppercase">reply</a>
   </div>
 </div>
</div>
</div>
</div>
</div>
<div class="comment-list">
  <div class="single-comment justify-content-between d-flex">
   <div class="user justify-content-between d-flex">
    <div class="thumb">
     <img src="assets/img/comment/comment_2.png" alt="">
   </div>
   <div class="desc">
     <p class="comment">
      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
    </p>
    <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
       <h5>
        <a href="#">Emilly Blunt</a>
      </h5>
      <p class="date">December 4, 2017 at 3:12 pm </p>
    </div>
    <div class="reply-btn">
     <a href="#" class="btn-reply text-uppercase">reply</a>
   </div>
 </div>
</div>
</div>
</div>
</div>
<div class="comment-list">
  <div class="single-comment justify-content-between d-flex">
   <div class="user justify-content-between d-flex">
    <div class="thumb">
     <img src="assets/img/comment/comment_3.png" alt="">
   </div>
   <div class="desc">
     <p class="comment">
      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
    </p>
    <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
       <h5>
        <a href="#">Emilly Blunt</a>
      </h5>
      <p class="date">December 4, 2017 at 3:12 pm </p>
    </div>
    <div class="reply-btn">
     <a href="#" class="btn-reply text-uppercase">reply</a>
   </div>
 </div>
</div>
</div>
</div>
</div>
</div>
<div class="comment-form">
 <h4>Leave a Reply</h4>
 <form class="form-contact comment_form" action="#" id="commentForm">
  <div class="row">
   <div class="col-12">
    <div class="form-group">
     <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
     placeholder="Write Comment"></textarea>
   </div>
 </div>
 <div class="col-sm-6">
  <div class="form-group">
   <input class="form-control" name="name" id="name" type="text" placeholder="Name">
 </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
   <input class="form-control" name="email" id="email" type="email" placeholder="Email">
 </div>
</div>
<div class="col-12">
  <div class="form-group">
   <input class="form-control" name="website" id="website" type="text" placeholder="Website">
 </div>
</div>
</div>
<div class="form-group">
 <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
</div>
</form>
</div>
</div>
<!-- <div class="col-lg-4">
  <div class="blog_right_sidebar">
   <aside class="single_sidebar_widget search_widget">
    <form action="#">
     <div class="form-group">
      <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder='Search Keyword'
       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
       <div class="input-group-append">
        <button class="btns" type="button"><i class="ti-search"></i></button>
      </div>
    </div>
  </div>
  <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
  type="submit">Search</button>
</form>
</aside>
<aside class="single_sidebar_widget post_category_widget">
  <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
  <ul class="list cat-list">
   <li>
    <a href="#" class="d-flex">
     <p>Resaurant food</p>
     <p>(37)</p>
   </a>
 </li>
 <li>
  <a href="#" class="d-flex">
   <p>Travel news</p>
   <p>(10)</p>
 </a>
</li>
<li>
  <a href="#" class="d-flex">
   <p>Modern technology</p>
   <p>(03)</p>
 </a>
</li>
<li>
  <a href="#" class="d-flex">
   <p>Product</p>
   <p>(11)</p>
 </a>
</li>
<li>
  <a href="#" class="d-flex">
   <p>Inspiration</p>
   <p>(21)</p>
 </a>
</li>
<li>
  <a href="#" class="d-flex">
   <p>Health Care</p>
   <p>(21)</p>
 </a>
</li>
</ul>
</aside>
<aside class="single_sidebar_widget popular_post_widget">
  <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
  <div class="media post_item">
   <img src="assets/img/post/post_1.png" alt="post">
   <div class="media-body">
    <a href="blog_details.html">
     <h3 style="color: #2d2d2d;">From life was you fish...</h3>
   </a>
   <p>January 12, 2019</p>
 </div> -->
<!-- </div>
<div class="media post_item">
 <img src="assets/img/post/post_2.png" alt="post">
 <div class="media-body">
  <a href="blog_details.html">
   <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
 </a>
 <p>02 Hours ago</p>
</div>
</div>
<div class="media post_item">
 <img src="assets/img/post/post_3.png" alt="post">
 <div class="media-body">
  <a href="blog_details.html">
   <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
 </a>
 <p>03 Hours ago</p>
</div>
</div>
<div class="media post_item">
 <img src="assets/img/post/post_4.png" alt="post">
 <div class="media-body">
  <a href="blog_details.html">
   <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
 </a>
 <p>01 Hours ago</p>
</div>
</div>
</aside>
<aside class="single_sidebar_widget tag_cloud_widget">
  <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
  <ul class="list">
   <li>
    <a href="#">project</a>
  </li>
  <li>
    <a href="#">love</a>
  </li>
  <li>
    <a href="#">technology</a>
  </li>
  <li>
    <a href="#">travel</a>
  </li>
  <li>
    <a href="#">restaurant</a>
  </li>
  <li>
    <a href="#">life style</a>
  </li>
  <li>
    <a href="#">design</a>
  </li>
  <li>
    <a href="#">illustration</a>
  </li>
</ul>
</aside>
<aside class="single_sidebar_widget instagram_feeds">
  <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
  <ul class="instagram_row flex-wrap">
   <li>
    <a href="#">
     <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
   </a>
 </li>
 <li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
 </a>
</li>
</ul>
</aside> -->
<!-- <aside class="single_sidebar_widget newsletter_widget">
  <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
  <form action="#">
   <div class="form-group">
    <input type="email" class="form-control" onfocus="this.placeholder = ''"
    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
  </div>
  <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
  type="submit">Subscribe</button>
</form>
</aside> -->
</div>
</div>
</div>
</div>
</section>
<!-- Blog Area End -->
<!--? About Law Start-->
<section class="about-low-area mt-60">
 <div class="container">
   <div class="about-cap-wrapper">
     <div class="row">
       <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
         <div class="about-caption mb-50">
           <!-- Section Tittle -->
           <div class="section-tittle mb-35">
             <h2>100% satisfaction guaranteed.</h2>
           </div>
           <p>Almost before we knew it, we had left the ground</p>
           <a href="about.html" class="border-btn">Make an Appointment</a>
         </div>
       </div>
       <div class="col-lg-6 col-md-12">
         <!-- about-img -->
         <div class="about-img">
           <div class="about-font-img">
             <img src="assets/img/gallery/about2.png" alt="">
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
                                                  <li><a href="index.html">Home</a></li>
                                                  <li><a href="about.html">About</a></li>
                                                  <li><a href="services.html">Services</a></li>
                                                  <li><a href="donation.html">Donation</a></li>
                                                  <li><a href="blog.html">Blog</a></li>
                                                  <li><a href="contact.html">Contact</a></li>
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

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

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
</body>
</html>