
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
    body {
        font-family: Arial, sans-serif;
        background-color: #eaf4e2;
        color: #333;
        margin: 5px;
        margin-bottom: 1px;
        padding: 5px;
    }
    .organ {
        max-width: 1000px;
        margin: 50px auto;
        padding: 80px;
        background: #b8d2bb;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden; /* Prevent content overflow */
    }
    .divider {
        height: 20px;
    }
    h1 {
        text-align: center;
        color: #2d6a4f;
        padding: 1rem;
        font-size: 5rem;
    }
    .guidelines {
        background-color: #d1ded2;
        padding: 15px;
        border: 1px solid #276239;
        border-radius: 5px;
        margin-bottom: 50px;
        font-size: 1.5rem;
    }
    .guidelines ul {
        list-style-type: disc;
        margin-left: 20px;
    }
    form {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        gap: 50px;
        font-size: 1.5rem;
        /* height: 100px; */
    }
    .form-section {
        padding: 10px;
        background-color: #d1ded2;
        border: 1px solid #847f7f;
        border-radius: 10px;
        margin-bottom: 40px;
    }
    #userrole{
        background-color: #2cce85;
    }
    .form-section h2 {
        margin-top: 0;
        color: #2d6a4f;
    }
    label {
        font-weight: bold;
    }
    .field-group {
        display: grid;
        grid-template-columns: 1fr; /* Default to single column */
        gap: 25px; /* Increased spacing between fields */
        padding: 10px 0; /* Add vertical spacing */
    }
    .field {
        display: flex;
        flex-direction: column;
        gap: 10px; /* Increased spacing within a field */
        margin-bottom: 15px; /* Add margin between fields */
    }
    input, select, textarea {
        padding: 12px; /* Slightly increased padding for better UI */
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        width: 100%; /* Ensure fields don't overflow */
        box-sizing: border-box; /* Include padding in width calculation */
    }
    textarea {
        resize: vertical;
    }
    button {
        padding: 12px 20px;
        background-color: #2d6a4f;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        display: none;
        transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease; /* Add transitions */
    }
    button:hover {
        background-color: #3c8d68;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds shadow on hover */
        transform: scale(1.02); /* Slightly enlarge the button */
    }
    button:active {
        transform: scale(1.0); /* Slightly shrink on click for a pressed effect */
        background-color: #808000;
        padding: 20px 0;
    }
    .dynamic-section {
        display: none;
    }
    @media (min-width: 600px) {
        .field-group {
            grid-template-columns: 1fr 1fr; /* Two columns on wider screens */
        }
    }
    #logo{
    width: 300px;
    }
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
                                <a href="index.php"><img id="logo" src="assets/img/logo/newlogo.png" alt=""></a>
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
        <div class="slider-area slider-area2">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider  d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Organ donation</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">The help we provide make<br>your life happy and long.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="organ">
        <h1>Organ Donation Registration</h1>
        <div class="guidelines">
            <h2>Important Guidelines for Organ Donation</h2>
            <ul>
                <li>Ensure you are of legal age and in good health before registering.</li>
                <li>Discuss your decision with family members to ensure they are aware of your wishes.</li>
                <li>Read and understand the terms and conditions thoroughly before giving consent.</li>
                <li>Provide accurate and truthful information in the registration form.</li>
                <li>Organ donation is a voluntary act and can save multiple lives.</li>
            </ul>
        </div>
        <form action="/submit" method="post">
            <div class="form-section">
                <p>Are you the Donor or the Recipient?</p>
                <select id="userRole" name="userRole" onchange="toggleFormSection()" required>
                    <option value="">Select Role</option>
                    <option value="donor">Donor</option>
                    <option value="recipient">Recipient</option>
                </select>
            </div>
    
            <div id="donorSection" class="dynamic-section form-section">
                <h2>Donor Information</h2>
                <div class="field-group">
                    <!-- Full Name -->
                    <div class="field">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>
            
                    <!-- Father's Name -->
                    <div class="field">
                        <label for="fatherName">Father's Name</label>
                        <input type="text" id="fatherName" name="fatherName" placeholder="Enter your father's name" required>
                    </div>
            
                    <!-- Email -->
                    <div class="field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
            
                    <!-- Phone -->
                    <div class="field">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
            
                    <!-- Date of Birth -->
                    <div class="field">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
            
                    <!-- Gender -->
                    <div class="field">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Address -->
                    <div class="field">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
                    </div>
            
                    <!-- Blood Group -->
                    <div class="field">
                        <label for="bloodGroup">Blood Group</label>
                        <select id="bloodGroup" name="bloodGroup" required>
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
            
                    <!-- Donation Source -->
                    <div class="field">
                        <label for="donationSource">Donation type</label>
                        <select id="donationSource" name="donationSource" required>
                            <option value="">Select type</option>
                            <option value="family">Live Donor</option>
                            <option value="hospital">Deceased Donor</option>
                        </select>
                    </div>
            
                    <!-- Government ID Selection -->
                    <div class="field">
                        <label for="govIdType">Government ID Type</label>
                        <select id="govIdType" name="govIdType" required>
                            <option value="">Select ID Type</option>
                            <option value="aadhar">Aadhar Card</option>
                            <option value="pan">PAN Card</option>
                            <option value="passport">Passport</option>
                            <option value="voter">Voter ID</option>
                        </select>
                    </div>
            
                    <!-- Government ID Input -->
                    <div class="field">
                        <label for="govId">Government ID Number</label>
                        <input type="text" id="govId" name="govId" placeholder="Enter your government ID number" required>
                    </div>
                </div>
            
                <!-- Organs to Donate -->
                <div class="field">
                    <label for="organs">Organs to Donate</label>
                    <textarea id="organs" name="organs" rows="3" placeholder="List the organs you wish to donate" required></textarea>
                </div>

                <!-- Consent -->
                <div class="field">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">I agree to donate my organs and have read the terms and conditions.</label>
                </div>
            </div>
            
    
            <div id="recipientSection" class="dynamic-section form-section">
                <h2>Recipient Information</h2>
                <div class="field-group">
                    <!-- Full Name -->
                    <div class="field">
                        <label for="recipientName">Full Name</label>
                        <input type="text" id="recipientName" name="recipientName" placeholder="Enter the recipient's full name" required>
                    </div>
            
                    <!-- Father's Name -->
                    <div class="field">
                        <label for="recipientFatherName">Father's Name</label>
                        <input type="text" id="recipientFatherName" name="recipientFatherName" placeholder="Enter the father's name" required>
                    </div>
            
                    <!-- Email -->
                    <div class="field">
                        <label for="recipientEmail">Email Address</label>
                        <input type="email" id="recipientEmail" name="recipientEmail" placeholder="Enter the recipient's email" required>
                    </div>
            
                    <!-- Phone -->
                    <div class="field">
                        <label for="recipientPhone">Phone Number</label>
                        <input type="tel" id="recipientPhone" name="recipientPhone" placeholder="Enter the recipient's phone number" required>
                    </div>

                    <!-- Date of Birth -->
                    <div class="field">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>

                    <!-- Gender -->
                    <div class="field">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Address -->
                    <div class="field">
                        <label for="recipientAddress">Recipient's Address</label>
                        <textarea id="recipientAddress" name="recipientAddress" rows="3" placeholder="Enter the recipient's address" required></textarea>
                    </div>
            
                    <!-- Blood Group -->
                    <div class="field">
                        <label for="recipientBloodGroup">Blood Group</label>
                        <select id="recipientBloodGroup" name="recipientBloodGroup" required>
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
            
                    <!-- Needed Organs -->
                    <div class="field">
                        <label for="neededOrgans">Organs Needed</label>
                        <textarea id="neededOrgans" name="neededOrgans" rows="3" placeholder="List the organs needed" required></textarea>
                    </div>
            
                    <!-- Government ID Selection -->
                    <div class="field">
                        <label for="recipientGovIdType">Government ID Type</label>
                        <select id="recipientGovIdType" name="recipientGovIdType" required>
                            <option value="">Select ID Type</option>
                            <option value="aadhar">Aadhar Card</option>
                            <option value="pan">PAN Card</option>
                            <option value="passport">Passport</option>
                            <option value="voter">Voter ID</option>
                        </select>
                    </div>
            
                    <!-- Government ID Input -->
                    <div class="field">
                        <label for="recipientGovId">Government ID Number</label>
                        <input type="text" id="recipientGovId" name="recipientGovId" placeholder="Enter the government ID number" required>
                    </div>
            
                    <!-- Hospital Details -->
                    <div class="field">
                        <label for="hospitalDetails">Hospital Details</label>
                        <textarea id="hospitalDetails" name="hospitalDetails" rows="3" placeholder="Enter the hospital name and address" required></textarea>
                    </div>
            
                </div>
            </div>
            
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="divider"></div>
    <!--? About Law Start-->
    <section class="about-low-area mt-80">
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
                                <a href="index.html"><img src="newlogo.png" alt=""></a>
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
<script src="/assets/js/chatbot.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function toggleFormSection() {
    const userRole = document.getElementById('userRole').value;
    const donorSection = document.getElementById('donorSection');
    const recipientSection = document.getElementById('recipientSection');
    const registerButton = document.querySelector('button[type="submit"]');

    donorSection.style.display = userRole === 'donor' ? 'block' : 'none';
    recipientSection.style.display = userRole === 'recipient' ? 'block' : 'none';
    registerButton.style.display = userRole ? 'block' : 'none';
}

document.addEventListener('DOMContentLoaded', function () {
    const registerButton = document.querySelector('button[type="submit"]');
    if (registerButton) {
        registerButton.style.display = 'none';
        registerButton.addEventListener('click', function (event) {
            event.preventDefault();
            const userRole = document.getElementById('userRole').value;
            const form = document.querySelector('form');
            const isLoggedIn = sessionStorage.getItem('isLoggedIn'); // Simulating login check
            
            if (!isLoggedIn) {
                Swal.fire({
                    title: 'Login Required!',
                    text: 'You must be logged in to register.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            if (!userRole) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please select a role before registering.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            // Validate required fields
            const requiredFields = form.querySelectorAll('[required]');
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Please fill in all required fields.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
            }
            
            Swal.fire({
                title: 'Registration Successful!',
                text: `You are registered as an organ ${userRole}.`,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                form.reset(); // Clear the form after submission
                location.reload(); // Reload the page
            });
        });
    }
});
</script>

</body>
</html>