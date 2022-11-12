<?php
include('includes/header.php');
include('../middleware/donorMiddleware.php');
include_once '../config/dbcon.php';
$result = mysqli_query($con,"SELECT * FROM users WHERE id = '".$_SESSION['auth_user']['userid']."'");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
    }
  }
?>


    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header">
                            <h4>Your Details</h4>
                        </div>
                        <div class="card-body">
                            <form  method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Name : <?php echo $name?></label>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone :<?php echo $phone?></label>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"class="form-label">Email address : <?php echo $email?> </label>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php'); ?>
