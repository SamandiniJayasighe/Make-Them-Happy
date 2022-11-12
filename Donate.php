<?php
include('config/dbcon.php');
session_start();
if($_SESSION['type']!='1')
{
    header('Location: Home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Donate</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <section class="header">

     <a href="Home.php" class="logo">Make Them happy.</a>

     <nav class="navbar">
        <a href="Home.php">Home</a>
        <a href="About.php">About</a>
        <a href="Contact.php">Contact</a>
        <a href="donor/index.php">My Profile</a>
        <a href="logout.php">Logout</a>
     </nav>

     <div id="menu-btn" class="fas fa-bars"></div>


  </section>
<div class = "heading" style = "background:url(images/donateash.png)" no-repeat>
  <h1> donate today! </h1>
</div>

<section class = "Donate">
  <h1 class="heading-title"> make your donations today! </h1>
  <div class="box-container">
        <div class="box">
           <div class="image">
              <img src="images/fooddonation.jpg" alt="">
           </div>
           <div class="content">
              <h3>donate and make them happy.</h3>
              <p>You can donate excess food via Make Them Happy. Through this, you can help needy and poor people and contribute to reduce food wastage.</p>
              <a href="food_donation.php" class="btn">donate now</a>
           </div>
        </div>

        <div class="box">
           <div class="image">
              <img src="images/cloth.jpg" alt="">
           </div>
           <div class="content">
              <h3>donate and make them happy.</h3>
              <p>You can donate excess cloths via Make Them Happy. Through this, you can help needy and poor people and contribute to reduce cloth wastage.</p>
              <a href="cloth_donation.php" class="btn">donate now</a>
           </div>
        </div>

        <div class="box">
           <div class="image">
              <img src="images/foot.jpg" alt="">
           </div>
           <div class="content">
              <h3>donate and make them happy.</h3>
              <p>You can donate excess footwear via Make Them Happy. Through this, you can help needy and poor people and contribute to reduce footwear wastage.</p>
              <a href="footwear_donation.php" class="btn">donate now</a>
           </div>
        </div>

        <div class="box">
           <div class="image">
              <img src="images/charity.png" alt="">
           </div>
           <div class="content">
              <h3>donate and make them happy.</h3>
              <p>You can donate money via Make Them Happy. Through this, you can help needy and poor people and contribute to make themselves comfortable.</p>
              <a href="money_donation.php" class="btn">donate now</a>
           </div>
        </div>

      </div>
</section>












<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="Home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="About.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="Contact.php"> <i class="fas fa-angle-right"></i> Contact</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> Register</a>
         <a href="Login.php"> <i class="fas fa-angle-right"></i> Login</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94 78 6305891 </a>
         <a href="#"> <i class="fas fa-envelope"></i> makethemhappy2022@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Faculty Of Engineering <br> University of Sri Jayewardenepura <br> Sri Lanka </a>
      </div>

   </div>

   <div class="credit"> created by <span>ms. sandunika samandini jayasinghe</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->








<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/Script.js"></script>

</body>
</html>
