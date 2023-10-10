<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="book" id="book">
    <h1 class="heading"> <span>book</span> now </h1>
    <div class="row">
        <div class="content">
            <p>Ready to schedule your next dental appointment? Look no further! Booking with us is as easy as saying 'cheese' for a smile.</p>
        </div>

        <form action="index.php" method="post">
            <h3>Book Appointment</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="number" placeholder="your number" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="date" class="box">
            <input type="submit" placeholder="book now" class="btn">
        </form>
    </div>
</section>
<!--booking section ends-->

<!--review section starts-->
<section class="review" id="review">
    <h1 class="heading"> client's <span> review </span></h1>
    <div class="box-container">

        <div class="box">
            <img src="client2.jpg" alt="">
            <h3>John D</h3>
            <div class="stars">
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star-half-alt"><ion-icon name="star"></ion-icon></i>
            </div>
            <p class="text">I used to dread going to the dentist, but ever since I started coming to Perfect Smile, my perspective has completely changed. The team here is incredibly friendly and professional. They make each visit comfortable, and the results have been outstanding. My smile has never looked better!</p>
        </div>

        <div class="box">
            <img src="client1.jpg" alt="">
            <h3>Sarah M</h3>
            <div class="stars">
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star-half-alt"><ion-icon name="star-half"></ion-icon></i>
            </div>
            <p class="text">I had some serious dental issues that needed attention, and I couldn't be happier with the care I received at Perfect Smile. The dentists were thorough in explaining the treatment plan and made sure I felt at ease throughout the process. My teeth look and feel fantastic now!</p>
        </div>

        <div class="box">
            <img src="client3.jpg" alt="">
            <h3>Michael P</h3>
            <div class="stars">
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star"><ion-icon name="star"></ion-icon></i>
                <i class="fas fa-star-half-alt"><ion-icon name="star-half"></ion-icon></i>
            </div>
            <p class="text">My kids love going to the dentist, thanks to the fantastic pediatric team at [Clinic Name]. They make the experience fun and educational. As a parent, I couldn't ask for a better place for my family's dental needs.</p>
        </div>

    </div>
</section>
<!--review section ends-->

<!--blogs section starts-->
<section class="blogs" id="blogs">
    <h1 class="heading"> our <span> blogs </span></h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="blog1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 20th June, 2020</a>
                    <a href="#"> <i class="fas fa-user"></i> by Sakura </a>
                </div>
                <h3>Teeth Whitening: Myths vs. Facts</h3>
                <p>Unlock the secrets to a brighter smile as we debunk common myths and reveal the science-backed facts about teeth whitening. Get ready to smile with confidence as we separate fiction from the truth, and discover the real path to a dazzling, pearly-white grin!</p>
                <a href="blog1.php" class="btn"> learn more </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="blog2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st June, 202</a>
                    <a href="#"> <i class="fas fa-user"></i> by Mike </a>
                </div>
                <h3>How to Choose the Right Toothbrush and Toothpaste</h3>
                <p>Navigate the world of dental care like a pro! Discover the insider's guide to selecting the perfect toothbrush and toothpaste, ensuring your daily routine leads to a healthier, brighter smile. Get ready to make the best choices for your oral hygiene journey!</p>
                <a href="blog2.php" class="btn"> learn more </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="blog3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 30th September, 2020</a>
                    <a href="#"> <i class="fas fa-user"></i> by John Doe </a>
                </div>
                <h3>The Role of Nutrition in Maintaining Healthy Teeth and Gums</h3>
                <p>Fuel your smile from the inside out! Explore the vital connection between nutrition and your dental well-being, and uncover the mouthwatering secrets to maintaining healthy teeth and gums. Get ready to savor the path to a radiant, confident grin!</p>
                <a href="blog3.php" class="btn"> learn more</a>
            </div>
        </div>

    </div>
</section>
<!--blogs section ends-->

<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="./index.php"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="./aboutus.php"> <i class="fas fa-chevron-right"></i> about us </a>
            <a href="./our.services.php"> <i class="fas fa-chevron-right"></i> services </a>
            <a href=""> <i class="fas fa-chevron-right"></i> appointments </a>
            <a href="./membership.php"> <i class="fas fa-chevron-right"></i> membership plan </a>
            <a href="./cr.php"> <i class="fas fa-chevron-right"></i> career </a>
            <a href="./login.php"> <i class="fas fa-chevron-right"></i> login/sign up </a>            
        </div>

        <div class="box">
            <h3>Our Services</h3>
            <a href="./services1.php"> <i class="fas fa-chevron-right"></i> Braces Orthodontics </a>
            <a href="./services2.php"> <i class="fas fa-chevron-right"></i> Kids Dentistry </a>
            <a href="./services3.php"> <i class="fas fa-chevron-right"></i> Root Canal Therapy </a>
            <a href="./services4.php"> <i class="fas fa-chevron-right"></i> Dental Implants </a>
            <a href="./services5.php"> <i class="fas fa-chevron-right"></i> Gum Therapy </a>
            <a href="./services6.php"> <i class="fas fa-chevron-right"></i> Teeth Whitening </a>
            <a href="./services7.php"> <i class="fas fa-chevron-right"></i> Laser Dentistry </a> 
            <a href="./services8.php"> <i class="fas fa-chevron-right"></i> Teeth Removal </a>                        
        </div>
        
        <div class="box">
            <h3>Our Services</h3>
            <a href="tel:7305686253"> <i class="fas fa-phone"></i> 7305686253 </a>
            <a href="tel:9840734794"> <i class="fas fa-phone"></i> 9840734794 </a>
            <a href="mailto:jdcare1997@gmail.com"> <i class="fas fa-envelope"></i> jdcare1997@gmail.com </a>
            <a href="mailto:perfectsmile1029@gmail.com"> <i class="fas fa-envelope"></i> perfectsmile1029@gmail.com </a> 
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Chennai, India - 600075 </a>                               
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com"> <i class="fas fa-facebook"></i> facebook </a>
            <a href="https://www.twitter.com"> <i class="fas fa-twitter"></i> twitter </a>
            <a href="https://www.instagram"> <i class="fas fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com"> <i class="fas fa-LinkedIn"></i> LinkedIn </a> 
            <a href="https://www.pinterest.com"> <i class="fas fa-Pinterest"></i> Pinterest </a>                               
        </div>
    </div>

    <div class="credit"> created by <span> Jorim Technology Solutions Pvt Ltd </span> | all rights reserved </div>
</section>
<!--footer section ends-->

    

<script src="js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
</body>
</html>