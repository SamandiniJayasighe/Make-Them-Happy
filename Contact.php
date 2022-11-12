
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

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

<!--form section starts-->
<section class = "Contact">

  <div class="contact-container">
      <h1 class="heading-title"> contact us </h1>
      <span>Feel free to contact us and we will get back to you as soon as we can.</span>
      <form action="mail.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email">
          <label for="subject">Subject:</label>
          <input type="text" name="subject" id="subject">
          <label for="message">Message</label>
          <textarea name="message" cols="30" rows="10"></textarea>
          <input type="submit" name="send" value="send">
      </form>
  </div>
  </section>


<!-- form section ends -->

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

   <div class="credit"> created by <span>ms. sandunika samandini jayasinghe</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/Script.js"></script>

</body>
</html>
