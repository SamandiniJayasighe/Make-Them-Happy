<?php


if(isset($_SESSION['auth']))
{
    if($_SESSION['type'] != '2')
    {
      $_SESSION['message'] = "You are not authorized to access this page";
      header('Location: ../index.php');
        /*redirect("../index.php", "You are not authorized to access this page");*/
    }
}
else
{
  $_SESSION['message'] = "Login to continue";
  header('Location: ../Login.php');
  /*  redirect("../Login.php", "Login to continue");*/
}

?>
