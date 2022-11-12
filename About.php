<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

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

   <a href="Home.php" class="logo">Make Them Happy.</a>

   <nav class="navbar">
      <a href="Home.php">Home</a>
      <a href="About.php">About</a>
      <a href="Contact.php">Contact</a>
      <?php
      session_start();
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
<div class = "heading" style = "background:url(images/home01.jpg)" no-repeat>
  <h1> about us </h1>
</div>

<!-- about section starts -->

<section class = "About">


  <div class="image">
        <img src="images/choose.jpg" alt="">
     </div>

     <div class="content">
        <h3>why choose us?</h3>
        <p>Hundreds of donors have chosen to work with this application because we offer expertise in donations and our grantmaking professionals work closely with the region's nonprofit sector.No matter how, why, or how much you give, you become part of a powerful force for good in our community.</p>
        <p>NGOs are the organizations which help people in many ways. But they are lack of funds. Therefore, they are unable to help people because of lack of funds. By using this web application, they don’t need more funds to help people. They only have to spend money to carry donated
        items.That's why, donors and NGO agents have to choose us.</p>
     </div>



</section>
<!-- about section ends -->










<!-- footer section starts -->

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
         <a href="#"> <i class="fas fa-map"></i> Faculty OOf Engineering <br> University of Sri Jayewardenepura <br> Sri Lanka </a>
      </div>


   </div>

   <div class="credit"> created by <span> sandunika samandini jayasinghe</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/Script.js"></script>

</body>
</html>
