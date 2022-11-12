<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
include_once '../config/dbcon.php';

$donors = mysqli_query($con,"SELECT * FROM users WHERE userType='1'");
$ngo = mysqli_query($con,"SELECT * FROM users WHERE userType='2'");
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


    <h3>Donors</h3>
    <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>

      </tr>
    </thead>
    <tbody>
    <?php
     if ($donors->num_rows > 0) {
     while($row = $donors->fetch_assoc()) {
      $id =$row['id'];
      echo "<tr>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['phone']."</td>";
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
<br><br>
<h3>NGO Agents</h3>
<table class="table table-striped table-dark">
<thead>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>

  </tr>
</thead>
<tbody>
<?php
 if ($ngo->num_rows > 0) {
 while($row = $ngo->fetch_assoc()) {
  $id =$row['id'];
  echo "<tr>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['email']."</td>";
    echo"<td>".$row['phone']."</td>";
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
