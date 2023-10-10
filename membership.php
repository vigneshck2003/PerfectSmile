<?php
    if(isset($_SESSION['email'])){
        header('location:signup.php');
    }

	session_start();

    include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Card</title>
    <link rel="stylesheet" href="mem.css">
    
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-dental"></i> PerfectSmile </a>
    
        <nav class="navbar">
        <a href="Perfect_smile/PerfectSmile_PHP/home.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="our.services.php">Services</a>
            <a href="booknow.php">Appointments</a>
            <a href="membership.php">Membership plan</a>
            <a href="cr.php">Career</a>
            <a href="login.php">Login</a>
            <a href="logout.php">Logout</a>      
        </nav>    
            <div id="menu-btn" class="fas fa-bar"></div>    
    </header>
    
    <section class="home" id="home">
        <div class="image">
            <img src="image/home-img.svg" alt="">
        </div>
    
        <div class="content">
            <h3>Membership Details</h3>
            <!-- <p>Where Smiles Shine Brighter Every Day!</p> -->
            <a href="./contactus.php" class="btn"> contact us </a>
        </div>
    </section>
    
    <div class="main">
        <div class="box1">
            <img src="mem1.jpg" class="img1">
            <h2 style="font-size: xx-large;">Basic</h2>
            <ul>
                <pre><li style="font-size: large;">  Digital X-Ray</li></pre>
                <pre><li style="font-size: large;">  Consultation</li></pre>
                <pre><li style="font-size: large;">  2 Scaling & Polishing</li></pre>
                <pre><li style="font-size: large;">  Free Oral Scanning</li></pre>
            </ul>
            <div class="button">
            <center>
                <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @Rs999/month</a></button>
            </center>
        </div>
        </div>
        <div class="box2">
        <img src="mem2.jpg" class="img2">
        <h2 style="font-size: xx-large;">Pro</h2>
        <ul>
            <pre><li style="font-size: large;">  Digital X-Ray</li></pre>
            <pre><li style="font-size: large;">  Voucher worth 2000</li></pre>
            <pre><li style="font-size: large;">  Free Oral Scanning</li></pre>
            <pre><li style="font-size: large;">  5 - Consultation Free</li></pre>
        </ul>
        <div class="button">
        <center>
            <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @ Rs1500/month</a></button>
        </center>
    </div>
        </div>
        <div class="box3">
            <img src="mem3.jpg" class="img3">
            <h2 style="font-size: xx-large;">Premium</h2>
            <ul>
                <pre><li style="font-size: large;"> Digital X-Ray</li></pre>
                <pre><li style="font-size: large;">  6-Consultation Free</li></pre>
                <pre><li style="font-size: large;">  Dental Family Voucher</li></pre>
                <pre><li style="font-size: large;">  10% Discount on any service</li></pre>
            </ul>
            <div class="button">
            <center>
                <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @Rs3999/month</a></button>
            </center>
        </div>
        </div>
        <div class="box4" class="img4">
            <img src="mem4.jpg" class="img4">
            <h2 style="font-size: xx-large;">Platinum</h2>
            <ul>
                <pre><li style="font-size: large;">  Digital X-Ray</li></pre>
                <pre><li style="font-size: large;">  No Consultation Charges</li></pre>
                <pre><li style="font-size: large;">  Free Smile Assesment</li></pre>
                <pre><li style="font-size: large;">  Dental Voucher worth Rs10000</li></pre>
            </ul>
            <center>
                <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @Rs4999/month</a></button>
            </center>
        </div>
        </div>
    </div>
    <!-- footer section -->
    <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="./index.php">Home</a>
            <a href="./aboutus.php">About us</a>
            <a href="./our.services.php">Services</a>
            <a href="./booknow.php">Appointments</a>
            <a href="./membership.php">Membership plan</a>
            <a href="./cr.php">Career</a>
            <a href="./login.php">Login</a>
            <a href="./logout.php">Logout</a>          
        </div>

        <div class="box">
            <h3>Our Services</h3>
            <a href="services1.php"> <i class="fas fa-chevron-right"></i> Braces Orthodontics </a>
            <a href="services2.php"> <i class="fas fa-chevron-right"></i> Kids Dentistry </a>
            <a href="services3.php"> <i class="fas fa-chevron-right"></i> Root Canal Therapy </a>
            <a href="services4.php"> <i class="fas fa-chevron-right"></i> Dental Implants </a>
            <a href="services5.php"> <i class="fas fa-chevron-right"></i> Gum Therapy </a>
            <a href="services6.php"> <i class="fas fa-chevron-right"></i> Teeth Whitening </a>
            <a href="services7.php"> <i class="fas fa-chevron-right"></i> Laser Dentistry </a> 
            <a href="services8.php"> <i class="fas fa-chevron-right"></i> Teeth Removal </a>                       
        </div>
        
        <div class="box">
            <h3>Our Services</h3>
            <a href="tel:7305686253"> <i class="fas fa-phone"></i> 7305686253 </a>
            <a href="tel:9840734794"> <i class="fas fa-phone"></i> 9840734794 </a>
            <a href="mailto:jdcare1997@gmail.com"> <i class="fas fa-envelope"></i> jdcare1997@gmail.com </a>
            <a href="mailto:perfectsmile1029@gmail.com"> <i class="fas fa-envelope"></i> perfectsmile1029@gmail.com </a> 
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Chennai, India - 600075 </a>git                                
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com"> <i class="fas fa-facebook"></i> facebook </a>
            <a href="https://www.twitter.com"> <i class="fas fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/"> <i class="fas fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com"> <i class="fas fa-LinkedIn"></i> LinkedIn </a> 
            <a href="https://www.pinterest.com"> <i class="fas fa-Pinterest"></i> Pinterest </a>                               
        </div>
    </div>

    <div class="credit"> created by <span> Jorim Technology Solutions Pvt Ltd </span> | all rights reserved </div>
</section>
</body>
</html>