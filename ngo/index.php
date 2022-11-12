<?php
include('includes/header.php');
include('../middleware/ngoMiddleware.php');
include('includes/sidebar.php');
include_once '../config/dbcon.php';

$money = mysqli_query($con,"SELECT * FROM charity_donation WHERE reserved_email is NULL ");
$food = mysqli_query($con,"SELECT * FROM food_donation WHERE reserved_email is NULL ");
$cloth = mysqli_query($con,"SELECT * FROM cloth_donation  WHERE reserved_email is NULL");
$footwear = mysqli_query($con,"SELECT * FROM footwear_donation  WHERE reserved_email is NULL");

if(isset($_POST['reserve_money'])){
    $id = $_POST['id'];
    $update_query = "UPDATE charity_donation SET reserved_email = '".$_SESSION['auth_user']['email']."' WHERE id = '$id'";
    $update_query_run = mysqli_query($con, $update_query);
    if($update_query_run){
      $money = mysqli_query($con,"SELECT * FROM charity_donation  WHERE reserved_email is NULL");
    }
}
if(isset($_POST['reserve_food'])){
  $id = $_POST['id'];
  $update_query = "UPDATE food_donation SET reserved_email = '".$_SESSION['auth_user']['email']."' WHERE id = '$id'";
  $update_query_run = mysqli_query($con, $update_query);
  if($update_query_run){
    $food = mysqli_query($con,"SELECT * FROM food_donation  WHERE reserved_email is NULL");
  }
}
if(isset($_POST['reserve_cloth'])){
  $id = $_POST['id'];
  $update_query = "UPDATE cloth_donation SET reserved_email = '".$_SESSION['auth_user']['email']."' WHERE id = '$id'";
  $update_query_run = mysqli_query($con, $update_query);
  if($update_query_run){
    $cloth = mysqli_query($con,"SELECT * FROM cloth_donation  WHERE reserved_email is NULL");
  }
}
if(isset($_POST['reserve_footwear'])){
  $id = $_POST['id'];
  $update_query = "UPDATE footwear_donation SET reserved_email = '".$_SESSION['auth_user']['email']."' WHERE id = '$id'";
  $update_query_run = mysqli_query($con, $update_query);
  if($update_query_run){
    $footwear = mysqli_query($con,"SELECT * FROM footwear_donation  WHERE reserved_email is NULL");
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

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-success'  name = 'reserve_money' >Reserve</button></td></form>";
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

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-success'  name = 'reserve_food' >Reserve</button></td></form>";
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

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-success'  name = 'reserve_cloth' >Reserve</button></td></form>";
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

        echo "<form method='post'><td><input type ='hidden' name ='id' value =".$id."><button type ='submit' class='btn btn-success'  name = reserve_footwear' >Reserve</button></td></form>";
      echo"</tr>";
    }
    ?>
    </tbody>
  </table>
</div>

<?php include('includes/footer.php'); ?>
