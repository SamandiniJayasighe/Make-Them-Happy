<?php

   $con = mysqli_connect('localhost','root','','user_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $quantity = $_POST['quantity'];
      $location = $_POST['location'];
      $note = $_POST['note'];

      $request = " insert into footwear_donation(name,	email,	phone	,quantity,	location,	note	) values('$name','$email','$phone','$quantity','$location','$note') ";
      mysqli_query($con, $request);

      header('location:Thankyou.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>
