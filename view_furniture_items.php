<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}
require "./nav.php";
?>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
     <p>Manage all your restaurant from here</p>

    </div>
    </div>

<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="mystore.php" class="list-group-item active  btn-info ">My Store</a>
    		<a href="view_furniture_items.php" class="list-group-item   btn-info ">View Furniture Items</a>
    		<a href="add_furniture_items.php" class="list-group-item   btn-info ">Add Furniture Items</a>
    		<a href="edit_furniture_items.php" class="list-group-item   btn-info ">Edit Furniture Items</a>
    		<a href="delete_furniture_items.php" class="list-group-item   btn-info ">Delete Furniture Items</a>
        <a href="view_order_details.php" class="list-group-item btn-info ">View Order Details</a>
    	</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> YOUR FURNITURE ITEMS LIST </h3>


<?php




// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM furniture f WHERE f.R_ID IN (SELECT r.R_ID FROM stores r WHERE r.M_ID='$user_check')AND options='ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>  </th>
        <th> Furniture ID </th>
        <th> Furniture Name </th>
        <th> Price </th>
        <th> Description </th>
        <th> Store ID </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["F_ID"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["description"]; ?></td>
      <td><?php echo $row["R_ID"]; ?></td>
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>
<br>
<br>
<br>
<br>
  
  </body>
</html>