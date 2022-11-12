<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">

   <a href="Home.php" class="logo">Make Them Happy.</a>

   <nav class="navbar">
      <a href="Home.php">Home</a>
      <a href="About.php">About</a>
      <a href="Contact.php">Contact</a>
      <?php
      if(isset($_SESSION['auth'])){
        ?>
            <a class="dropdown-item" href="./middleware/selector.php">Dashboard</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
        <?php
      }
      else{
        ?>

          <a class="nav-link" href="register.php">Register</a>
          <a class="nav-link" href="Login.php">Login</a>

        <?php
      }

       ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="Home">

   <div class="swiper Home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/d8.jpg) no-repeat">
            <div class="content">
               <span>happiness doesn't result from what we get, it is from what we give.</span>
               <h3>donate and make them happy</h3>
               <a href="About.php" class="btn">know more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/d1.jpg) no-repeat">
            <div class="content">
               <span>we make a living by what we get. we make a life by what we give.</span>
               <h3>donate and make them happy</h3>
               <a href="About.php" class="btn">know more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/d3.jpg) no-repeat">
            <div class="content">
               <span>giving is not about making a donation, it is about making difference.</span>
               <h3>donate and make them happy</h3>
               <a href="About.php" class="btn">know more</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/foodicon.jpg" alt="">
         <h3>food donation</h3>
      </div>

      <div class="box">
         <img src="images/clothicon.jpg" alt="">
         <h3>cloth donation</h3>
      </div>

      <div class="box">
         <img src="images/footwearicon.jpg" alt="">
         <h3>footwear donation</h3>
      </div>

      <div class="box">
         <img src="images/moneyicon.jpg" alt="">
         <h3>charity donation</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="Home-about">

   <div class="image">
      <img src="images/homeabout.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Many people in the world are suffering from poverty because of many reasons. Poverty is the lack of basic human needs, such as clean water, nutrition, health care, education, clothing and shelter, because of the inability to afford them. Also, there are some places discard excess food, clothes, footwear, books and stationaries. They are usable but most of the time, they do not reach to the needy people. It is a wastage. This web application connects donors and NGO s to help poor people.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->



<!-- home packages section ends -->


















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

   <div class="credit"> created by <span>sandunika samandini jayasinghe</span> | all rights reserved! </div>

</section>


<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
