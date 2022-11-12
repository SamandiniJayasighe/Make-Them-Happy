<?php
session_start();
include('../config/dbcon.php');
include('myfunctions.php');
if(isset($_POST['register-btn'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $userType = mysqli_real_escape_string($con, $_POST['userType']);

    //check if email already registered
    $check_email_query = "SELECT email from users where email ='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0 )
    {
        $_SESSION['message'] =  "Email already registered";
        header('Location: ../register.php');
    }
    else{
      if($password == $cpassword)
      {
        $insert_query = "INSERT INTO users (name,email,phone, password, userType) VALUES ('$name', '$email', '$phone', '$password', '$userType')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run){
            $_SESSION['message'] = "Registered Successfully";
            header('Location: ../Login.php');
        }else{
          $_SESSION['message'] = "Something went wrong";
            header('Location: ../register.php');
        }

      }
      else{
        $_SESSION['message'] = "Passwords do not match";
        header('Location: ../register.php');
      }

    }

}
else if(isset($_POST['login-btn'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "select * from users where email='$email' and password = '$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $userType = $userdata['userType'];
        $userId = $userdata['id'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail,
            'userid' => $userId
        ];

        $_SESSION['type'] = $userType;

        if($userType == '0')
        {
          $_SESSION['message'] = "Welcome to dashboard";
          header('Location: ../admin/index.php');
        }
        else if($userType == '1')
        {
          $_SESSION['message'] = "Welcome to dashboard";
          header('Location: ../donor/index.php');
        }
        else
        {
          $_SESSION['message'] = "Welcome to dashboard";
          header('Location: ../ngo/index.php');
        }
    }
    else{
      $_SESSION['message'] = "Invalid Credentials";
      header('Location: ../Login.php');
    }
}


 ?>
