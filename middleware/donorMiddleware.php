<?php


if(isset($_SESSION['auth']))
{
    if($_SESSION['type'] != '1')
    {
        redirect("../index.php", "You are not authorized to access this page");
    }
}
else
{
    redirect("../Login.php", "Login to continue");
}

?>
