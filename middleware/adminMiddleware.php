<?php

include('../functions/myfunctions.php');
if(isset($_SESSION['auth']))
{
  if($_SESSION['type'] != '0')
  {
      redirect("../Home.php", "You are not authorized to access this page");
  }
}
else
{
   redirect("../Login.php", "Login to continue");
}

?>
