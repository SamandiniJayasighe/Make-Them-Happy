<?php
include('includes/header.php');
include('../middleware/ngoMiddleware.php');
include_once '../config/dbcon.php';

$result = mysqli_query($con,"SELECT * FROM users WHERE id = '".$_SESSION['auth_user']['userid']."'");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
    }
  }

if(isset($_POST['change_Details'])){
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($_POST['name']!=""){
        $insert_query =  "UPDATE users SET name = '".$_POST['name']."'  WHERE id = '".$_SESSION['auth_user']['userid']."'";
        $insert_query_run = mysqli_query($con, $insert_query);
        $_SESSION['auth_user']['name']=  $_POST['name'];
    }
    if($_POST['email']!=""){
        $check_email_query = "SELECT email from users where email ='".$_POST['email']."'";
        $check_email_query_run = mysqli_query($con, $check_email_query);
    
        if(mysqli_num_rows($check_email_query_run) > 0 )
        {
            $_SESSION['message'] =  "Email already registered";
           
        }else{
        $insert_query =  "UPDATE users SET email = '".$_POST['email']."'  WHERE id = '".$_SESSION['auth_user']['userid']."'";
        $insert_query_run = mysqli_query($con, $insert_query);
        $_SESSION['auth_user']['email']=  $_POST['email'];
        }
    }
    if($_POST['phone']!=""){
        $insert_query =  "UPDATE users SET phone = '".$_POST['phone']."'  WHERE id = '".$_SESSION['auth_user']['userid']."'";
        $insert_query_run = mysqli_query($con, $insert_query);
    }
    if($_POST['password']!=""){
        if($password == $cpassword)
        {
            $insert_query =  "UPDATE users SET password = '".$_POST['password']."'  WHERE id = '".$_SESSION['auth_user']['userid']."'";
            $insert_query_run = mysqli_query($con, $insert_query);
        }
        else{
          $_SESSION['message'] = "Passwords do not match";
          
        }
      }
      $result = mysqli_query($con,"SELECT * FROM users WHERE id = '".$_SESSION['auth_user']['userid']."'");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
    }
  }
}
?>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <?php if(isset($_SESSION['message']))
                    { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hello!</strong> <?= $_SESSION['message']; ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                    unset($_SESSION['message']);
                    }
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Change Details</h4>
                        </div>
                        <div class="card-body">
                            <form  method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder=<?php echo $name?>>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="number" name="phone" class="form-control" placeholder=<?php echo $phone?>>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder=<?php echo $email?> id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" id="exampleInputPassword1">
                                </div>
                               
                                <button type="submit" name="change_Details" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php'); ?>
