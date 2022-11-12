<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
include('includes/sidebar.php');
include_once '../config/dbcon.php';

$money = mysqli_query($con,"SELECT * FROM charity_donation");
$food = mysqli_query($con,"SELECT * FROM food_donation");
$cloth = mysqli_query($con,"SELECT * FROM cloth_donation");
$footwear = mysqli_query($con,"SELECT * FROM footwear_donation");
$donorcountquery = mysqli_query($con,"SELECT count(id) FROM users WHERE userType = 1");
$moneycountquery = mysqli_query($con,"SELECT SUM(money) FROM charity_donation");
$ngocountquery = mysqli_query($con,"SELECT count(id) FROM users WHERE userType = 2");
$donorcount=0;
$ngocount=0;
$totalmoney =0;
while($row = $donorcountquery->fetch_assoc()) {
$donorcount= $row['count(id)'];
}
while($row = $moneycountquery->fetch_assoc()) {
  $totalmoney= $row['SUM(money)'];
  }
  while($row = $ngocountquery->fetch_assoc()) {
    $ngocount= $row['count(id)'];
    }
if(isset($_POST['remove_money'])){
    $id = $_POST['id'];
    $delete_query = "DELETE FROM charity_donation WHERE id = '$id'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if($delete_query_run){
      $money = mysqli_query($con,"SELECT * FROM charity_donation");
    }
}
if(isset($_POST['remove_food'])){
  $id = $_POST['id'];
  $delete_query = "DELETE FROM food_donation WHERE id = '$id'";
  $delete_query_run = mysqli_query($con, $delete_query);
  if($delete_query_run){
    $food = mysqli_query($con,"SELECT * FROM food_donation");
  }
}
if(isset($_POST['remove_cloth'])){
  $id = $_POST['id'];
  $delete_query = "DELETE FROM cloth_donation WHERE id = '$id'";
  $delete_query_run = mysqli_query($con, $delete_query);
  if($delete_query_run){
    $cloth = mysqli_query($con,"SELECT * FROM cloth_donation");
  }
}
if(isset($_POST['remove_footwear'])){
  $id = $_POST['id'];
  $delete_query = "DELETE FROM footwear_donation WHERE id = '$id'";
  $delete_query_run = mysqli_query($con, $delete_query);
  if($delete_query_run){
    $footwear = mysqli_query($con,"SELECT * FROM footwear_donation");
  }
}
?>
<style>
   td {
            padding: 5px;
            text-align: center;
      }
  th {
            padding: 5px;
            text-align: center;
      }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <h5>Hello admin! </h5>
            <div class="row mt-4">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Donations</p>
                <h4 class="mb-0"> Rs.<?php echo $totalmoney?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Donors</p>
                <h4 class="mb-0"><?php echo $donorcount?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total NGO Agents</p>
                <h4 class="mb-0"><?php echo $ngocount?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

            </div>
          </div>
        </div>

      </div>
        </div>
    </div>

    <br>
    <br>
    <h3>Money Donations</h3>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Money</th>
        <th>Location</th>
        <th>Note</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $money->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['phone']."</td>";
        echo"<td>".$row['money']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-danger'  name = 'remove_money' >Remove</button></td></form>";
      echo"</tr>";
    }
    ?>
    </tbody>
  </table>
  <br>
    <br>
  <h3>Food Donations</h3>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Food</th>
        <th>Approx Food</th>
        <th>Approx Hours</th>
        <th>Location</th>
        <th>Note</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $food->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['phone']."</td>";
        echo"<td>".$row['food']."</td>";
        echo"<td>".$row['approx_food']."</td>";
        echo"<td>".$row['approx_hours']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-danger'  name = 'remove_food' >Remove</button></td></form>";
      echo"</tr>";
    }
    ?>
    </tbody>
  </table>
  <br>
    <br>
  <h3>Cloth Donations</h3>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Cloth</th>
        <th>Quantity</th>
        <th>Location</th>
        <th>Note</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $cloth->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['phone']."</td>";
        echo"<td>".$row['cloth']."</td>";
        echo"<td>".$row['quantity']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-danger'  name = 'remove_cloth' >Remove</button></td></form>";
      echo"</tr>";
    }
    ?>
    </tbody>
  </table>

  <br>
    <br>
  <h3>Footwear Donations</h3>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Quantity</th>
        <th>Location</th>
        <th>Note</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $footwear->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['phone']."</td>";
        echo"<td>".$row['quantity']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-danger'  name = 'remove_footwear' >Remove</button></td></form>";
      echo"</tr>";
    }
    ?>
    </tbody>
  </table>
</div>

<?php include('includes/footer.php'); ?>
