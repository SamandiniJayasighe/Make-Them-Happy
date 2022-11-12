<?php
   $con = mysqli_connect('localhost','root','','user_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $food = $_POST['food'];
      $approx_food = $_POST['approx_food'];
      $approx_hours = $_POST['approx_hours'];
      $location = $_POST['location'];
      $note = $_POST['note'];

      $request = " insert into food_donation(name,	email	,phone,	food,	approx_food,	approx_hours,	location,	note) values('$name','$email','$phone','$food','$approx_food','$approx_hours','$location','$note') ";
      mysqli_query($con, $request);

      header('location:Thankyou.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>
