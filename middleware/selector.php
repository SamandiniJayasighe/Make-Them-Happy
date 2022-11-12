<?php

include('../functions/myfunctions.php');
session_start();
if(isset($_SESSION['auth']))
{
  if($_SESSION['type'] == '0')
  {
      redirect("../admin/index.php", "You are not authorized to access this page");
  }else if($_SESSION['type']=='1'){
      redirect("../donor/index.php", "You are not authorized to access this page");
  }else{
      redirect("../ngo/index.php", "You are not authorized to access this page");
  }
}
else
{
   redirect("../Login.php", "Login to continue");
}

?>
