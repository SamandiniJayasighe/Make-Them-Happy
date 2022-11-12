<?php
include('includes/header.php');
include('../middleware/donorMiddleware.php');
include_once '../config/dbcon.php';

$money = mysqli_query($con,"SELECT * FROM charity_donation WHERE email = '".$_SESSION['auth_user']['email']."'");
$food = mysqli_query($con,"SELECT * FROM food_donation WHERE email ='".$_SESSION['auth_user']['email']."' ");
$cloth = mysqli_query($con,"SELECT * FROM cloth_donation  WHERE email= '".$_SESSION['auth_user']['email']."'");
$footwear = mysqli_query($con,"SELECT * FROM footwear_donation  WHERE email= '".$_SESSION['auth_user']['email']."'");

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
  .text_center{
    text-align: center;
  }
</style>
<div class="container">

<div class ="text_center">

<h2>Your Donations</h2>
</div>
    <h3>Money Donations</h3>
    <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th>Money</th>
        <th>Location</th>
        <th>Note</th>

      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $money->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";

        echo"<td>".$row['money']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";
      echo"</tr>";
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
        <th>Food</th>
        <th>Approx Food</th>
        <th>Approx Hours</th>
        <th>Location</th>
        <th>Note</th>

      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $food->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['food']."</td>";
        echo"<td>".$row['approx_food']."</td>";
        echo"<td>".$row['approx_hours']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";

      echo"</tr>";
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
        <th>Cloth</th>
        <th>Quantity</th>
        <th>Location</th>
        <th>Note</th>

      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $cloth->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['cloth']."</td>";
        echo"<td>".$row['quantity']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";


      echo"</tr>";
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
        <th>Quantity</th>
        <th>Location</th>
        <th>Note</th>
      
      </tr>
    </thead>
    <tbody>
    <?php
     while($row = $footwear->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['quantity']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['note']."</td>";


      echo"</tr>";
    }
    ?>
    </tbody>
  </table>
</div>

<?php include('includes/footer.php'); ?>
