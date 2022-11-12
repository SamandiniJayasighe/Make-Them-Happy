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
   <title>Footwear Donation</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">

   <a href="Home.php" class="logo">Make Them happy.</a>

   <nav class="navbar">
      <a href="Home.php">Home</a>
      <a href="About.php">About</a>
      <a href="Contact.php">Contact</a>
      <a href="Donate.php">Donate</a>
      <a href="donor/index.php">My Profile</a>
      <a href="logout.php">Logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>


</section>


<!-- header section ends -->
<section class = "donations">
<h1 class="heading-title"> donate footwear... </h1>
<form action = "footwear_donation_form.php"  method="post" class="donation-form">
  <div class = "flex">
    <div class = "inputBox">
      <span>name: </span>
      <input type = "text" placeholder="Enter your name" name = "name" >
    </div>
    <div class = "inputBox">
      <span>email: </span>
      <input type = "email" placeholder="Enter your email" name = "email" >
    </div>
    <div class = "inputBox">
      <span>phone number: </span>
      <input type = "number" placeholder="Enter your phone number" name = "phone" >
    </div>
    <div class = "inputBox">
      <span>quantity of shoes: </span>
      <input type = "number" placeholder="Enter the quantity of shoes" name = "quantity" >
    </div>
    <div class = "inputBox">
      <span>donation collection address: </span>
      <input type = "text" placeholder="Enter the donation collection address" name = "location" >
    </div>
    <div class = "inputBox">
      <span>special note</span>
      <input type = "text" placeholder="special note" name = "note" >
    </div>

    <input type = "submit" value = "submit" class = "btn" name = "send">



  </div>

</form>





</section>


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="Home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="About.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="Contact.php"> <i class="fas fa-angle-right"></i> Contact</a>
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
         <a href="#"> <i class="fas fa-map"></i> Faculty OOf Engineering <br> University of Sri Jayewardenepura <br> Sri Lanka </a>
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
