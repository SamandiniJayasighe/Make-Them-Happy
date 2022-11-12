<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
include_once '../config/dbcon.php';

$money = mysqli_query($con,"SELECT * FROM charity_donation WHERE reserved_email IS NOT NULL");
$food = mysqli_query($con,"SELECT * FROM food_donation WHERE reserved_email IS NOT NULL ");
$cloth = mysqli_query($con,"SELECT * FROM cloth_donation  WHERE reserved_email IS NOT NULL");
$footwear = mysqli_query($con,"SELECT * FROM footwear_donation  WHERE reserved_email IS NOT NULL");
if(isset($_POST['remove_money'])){
    $id = $_POST['id'];
    $delete_query = "DELETE FROM charity_donation WHERE id = '$id'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if($delete_query_run){
      $money = mysqli_query($con,"SELECT * FROM charity_donation WHERE reserved_email IS NOT NULL");
    }
}
if(isset($_POST['remove_food'])){
  $id = $_POST['id'];
  $delete_query = "DELETE FROM food_donation WHERE id = '$id'";
  $delete_query_run = mysqli_query($con, $delete_query);
  if($delete_query_run){
    $food = mysqli_query($con,"SELECT * FROM food_donation WHERE reserved_email IS NOT NULL ");
  }
}
if(isset($_POST['remove_cloth'])){
  $id = $_POST['id'];
  $delete_query = "DELETE FROM cloth_donation WHERE id = '$id'";
  $delete_query_run = mysqli_query($con, $delete_query);
  if($delete_query_run){
    $cloth = mysqli_query($con,"SELECT * FROM cloth_donation  WHERE reserved_email IS NOT NULL");
  }
}
if(isset($_POST['remove_footwear'])){
  $id = $_POST['id'];
  $delete_query = "DELETE FROM footwear_donation WHERE id = '$id'";
  $delete_query_run = mysqli_query($con, $delete_query);
  if($delete_query_run){
    $footwear =  mysqli_query($con,"SELECT * FROM footwear_donation  WHERE reserved_email IS NOT NULL");
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
    <table class="table table-striped table-dark">
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
     if ($money->num_rows > 0) {
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
  }else{
    echo "<tr>";
    echo "No Items found";
    echo "</tr>";
  }
    ?>
    </tbody>
  </table>
  <br>
    <br>
  <h3>Food Donations</h3>
    <table class="table table-striped table-dark">
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
     if ($food->num_rows > 0) {
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
  }else{
    echo "<tr>";
    echo "No Items found";
    echo "</tr>";
  }
    ?>
    </tbody>
  </table>
  <br>
    <br>
  <h3>Cloth Donations</h3>
    <table class="table table-striped table-dark">
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
    if ($cloth->num_rows > 0) {
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
  }else{
    echo "<tr>";
    echo "No Items found";
    echo "</tr>";
  }
    ?>
    </tbody>
  </table>

  <br>
    <br>
  <h3>Footwear Donations</h3>
    <table class="table table-striped table-dark">
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
    if ($footwear->num_rows > 0) {
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
  }else{
    echo "<tr>";
    echo "No Items found";
    echo "</tr>";
  }
    ?>
    </tbody>
  </table>
</div>

<?php include('includes/footer.php'); ?>
