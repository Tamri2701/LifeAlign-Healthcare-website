<?php 
session_start(); // Start the session
?>

<html lang="en">
<head>
    <meta charset="utf-8">
<title>COVID-19 Vaccine Information</title>
    <link rel="stylesheet" href="vacci.css">
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="logo .png" alt="VacciCare Logo">
    </div>
    <div class="heading">
        <h1>VacciCare: Vaccine for a Safer Tommorow</h1>
    </div>
    <div class="search-box">
        <input type="text" id="search" placeholder="Search for vaccines...">
        <button id="search-btn">Search</button>
    </div>
    <div class="search-results">
        <ul id="search-list"></ul>
    </div>
    <div class="auth">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="user">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <a href="logout.php" class="logout">Logout</a>
            <?php else: ?>
                <a href="../login.php" class="user">Sign up / Log in</a>
            <?php endif; ?>
        </div>

    
</div>
<style>
        .navbarr {
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

<div class="maincard-container">
    <div class="card-container">
        <!-- Card 1 - COVID Vaccine 1 -->
        <div class="card" id="covaxin-card">
            <div class="card-img">
                <img src="covaxin.png" alt="COVID Vaccine 1">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">COVID Vaccine</h3>
                <p>"Provides protection against COVID-19, reducing the risk of severe illness."</p>
                <button class="read-more" onclick="showPopup('popup1')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 2 - MMR Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="mmr.png" id="mmr" alt="MMR Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">MMR Vaccine</h3>
                <p>Guards against measles, mumps, and rubella to prevent serious complications.</p>
                <button class="read-more" onclick="showPopup('popup2')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 3 - Polio Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="polio.png" alt="Polio Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">Polio Vaccine</h3>
                <p>Protects against poliovirus, preventing paralysis and severe outcomes.</p>
                <button class="read-more" onclick="showPopup('popup3')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 4 - Influenza Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="influ.png" alt="Influenza Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">Influenza Vaccine</h3>
                <p>Reduces the risk of seasonal flu and its complications.</p>
                <button class="read-more" onclick="showPopup('popup4')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 5 - Hepatitis A Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="hepat.png" id="cov" alt="Hepatitis A Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">Hepatitis A Vaccine</h3>
                <p>Prevents Hepatitis A infection, a virus affecting the liver.</p>
                <button class="read-more" onclick="showPopup('popup1')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 6 - HPV Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="hpv.png" alt="HPV Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">HPV Vaccine</h3>
                <p>Prevents human papillomavirus (HPV) infections, reducing the risk of cervical cancer and other HPV-related cancers.</p>
                <button class="read-more" onclick="showPopup('popup6')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 7 - Varicella Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="var.png" alt="Varicella (Chickenpox) Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">Varicella (Chickenpox) Vaccine</h3>
                <p>Protects against chickenpox, reducing the risk of severe illness and complications.</p>
                <button class="read-more" onclick="showPopup('popup7')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 8 - Rabies Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="rabese.png" alt="Rabies Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">Rabies Vaccine</h3>
                <p>"Offers protection against rabies, a fatal disease transmitted by animal bites."</p>
                <button class="read-more" onclick="showPopup('popup8')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 9 - Rotavirus Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="rota.png" alt="Rotavirus Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">Rotavirus Vaccine</h3>
                <p>Prevents severe diarrhea caused by rotavirus, especially in young children.</p>
                <button class="read-more" onclick="showPopup('popup9')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>

        <!-- Card 10 - Hepatitis B Vaccine -->
        <div class="card">
            <div class="card-img">
                <img src="heptb.png" alt="Hepatitis B Vaccine">
            </div>
            <div class="card-body">
                <h3 class="vaccine-name">Hepatitis B Vaccine</h3>
                <p>Prevents Hepatitis B virus infection, which can lead to chronic liver disease and liver cancer.</p>
                <button class="read-more" onclick="showPopup('popup5')">Read more</button>
                <a href="vaccislo.html"><button class="register-btn">Register and Book Your Slot</button></a>
            </div>
        </div>
    </div>
</div>



<!-- Popup Modal for COVID Vaccine 1 -->
<div id="popup1" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('popup1')">×</span>
        <h2>COVID Vaccine - Detailed Information</h2>
        <br>
        <div class="popup-img">
            <img src="Coronavirus.png" alt="COVID Vaccine 1">
        </div>
        <br>
        <p><h3>What is covid?</h3> COVID-19 is a virus which is called SARS-CoV-2, or severe acute respiratory syndrome coronavirus 2. The disease caused by the SARS-CoV-2 virus was originally called the 2019 novel (new) coronavirus. The shortened name is COVID-19.</p>
        <br>
        <p><h3>History</h3>COVID-19 first appeared on a small scale in November 2019 with the first large cluster appearing in Wuhan, China, in December 2019. It was first thought that SARS-CoV-2, the virus that causes COVID-19, made the jump to humans at one of Wuhan, China’s, open-air “wet markets.” Wet markets are partially or fully open-air markets that sell fresh produce and meat. China's in-country World Health Organization office learned of multiple pneumonia cases of unknown cause with symptoms such as fever and shortness of breath that seemed to be connected to the market.  </p>
        <br>
        <p><h3>Symptoms</h3>
        <ul>
            <li>Fever</li>
            <li>cough</li>
            <li>fatigue</li>
            <li>shortness of breath </li>
            <li>loss of taste/smell</li>
        </ul></p>
        <br>
        <p><h3>Side effects</h3>
            <ul>
                <li>Mild fever</li>
                <li>fatigue</li>
                <li>very rare severe allergic reactions</li>
                
            </ul></p>
    </div>
</div>

<!-- Popup Modal for COVID Vaccine 2 -->
<div id="popup2" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('popup2')">×</span>
        <h2>MMR - Detailed Information</h2>
        <div class="popup-img">
            <img src="hq720.jpg" alt="COVID Vaccine 2">
        </div>
        <br>
        <p><h3>What is MMR virus?</h3>MMR is an abbreviation for Measles, Mumps, and Rubella, a combination vaccine that protects against these diseases. The CDC recommends that children receive two doses of the MMR vaccine, with the first dose given between 12 and 15 months of age and the second dose between 4 and 6 years of age</p>
    <br>
    <p><h3>History</h3>The measles virus was isolated in 1954 by doctors at Boston Children's Hospital. The first measles vaccines were approved in 1963, including Pfizer-Vax Measles–K and Rubeovax. The measles vaccine was licensed for public use in 1961 </p>
    <br>
    <p><h3>Symptoms</h3>
        
        <ul>
            <li><b>Measles:</b> High fever, cough, runny nose, red eyes, rash.</li>
            <li><b>Mumps:</b> Swollen salivary glands, fever, headache, muscle pain.</li>
            <li><b>Rubella:</b>Mild fever, rash, swollen lymph nodes.</li>


        </ul></p>

        <br>
        <p><h3>Side effects</h3>
            <ul>
                <li>Mild fever</li>
                <li>fatigue</li>
                <li>very rare severe allergic reactions</li>
                
            </ul></p>   
        <br>
        <p><h3>Schedule</h3>
        <ul>
            <li>First dose: 12-15 months.</li>
            <li>Second dose: 4-6 years.</li>
            
        </ul></p>
</div>

</div>

<!-- Popup Modal for COVID Vaccine 3 -->
<div id="popup3" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('popup3')">×</span>
        <h2>Polio-Detailed Information</h2>
        <br>
        <div class="popup-img">
            <img src="polio-thumb.png" alt="COVID Vaccine 3">
        </div>
        <br>
        <p><h3>What is Polio?</h3>Polio is an illness caused by a virus that mainly affects nerves in the spinal cord or brain stem. In its most severe form, polio can lead to a person being unable to move certain limbs, also called paralysis. It can also lead to trouble breathing and sometimes death. The disease also is called poliomyelitis.</p>
    <br>
       <p><h3>History</h3>In the early 20th century, polio was one of the most feared diseases in industrialized countries, paralysing hundreds of thousands of children every year. Soon after the introduction of effective vaccines in the 1950s and 1960s however, polio was brought under control and practically eliminated as a public health problem in these countries.</p>
    <br>
       <p><h3>Symptoms</h3>
       <ul>
            <li>Fever</li>
            <li>fatigue</li>
            <li>headache</li>
            <li> vomiting</li>
            <li>paralysis in severe cases</li>
        </ul></p>

    <br>
        <p><h3>Side effects</h3>
            <ul>
                <li>very minimal effects</li>   
            </ul></p>   
        <br>
        <p><h3>Schedule</h3>
        <ul>
            <li>IPV: 2, 4, 6-18 months; booster at 4-6 years</li>
     </ul></p>
    </div>
    
</div>

<!-- Popup Modal for COVID Vaccine 4 -->
<div id="popup4" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('popup4')">×</span>
        <h2>COVID Vaccine 4 - Detailed Information</h2>
        <div class="popup-img">
            <img src="image4.jpg" alt="COVID Vaccine 4">
        </div>
        <p>Detailed description about COVID Vaccine 4: how it works, benefits, side effects, and more.</p>
    </div>
</div>

<!-- Add Popups for New Vaccines here as well -->

<script src="script.js"></script>

      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>

</body>
</html>
