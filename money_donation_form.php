<?php

   $con = mysqli_connect('localhost','root','','user_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $money = $_POST['money'];
      $location = $_POST['location'];
      $note = $_POST['note'];

      $request = " insert into charity_donation(name,	email,	phone	,money,	location,	note	) values('$name','$email','$phone','$money','$location','$note') ";
      mysqli_query($con, $request);

      header('location:Thankyou.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>
