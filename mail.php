<?php
if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $header = "From:makethemhappy2022@gmail.com\r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";

   $retval = mail ($name,$email,$subject,$message);

 if( $retval == true ) {
   header('location:Aftermail.php');
 }else {
    echo "Message could not be sent...";
 }


}
?>
