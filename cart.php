<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
include 'nav.php';
?>


  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  


    
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        
        
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Furniture Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["furniture_name"]; ?></td>
<td><?php echo $values["furniture_quantity"] ?></td>
<td> <?php echo $values["furniture_price"]; ?></td>
<td> <?php echo number_format($values["furniture_quantity"] * $values["furniture_price"], 2); ?></td>
<td><a href="cart.php?action=delete&id=<?php echo $values["furniture_id"]; ?>"><span class="text-danger">Remove</span></a></td>
</tr>
<?php 
$total = $total + ($values["furniture_quantity"] * $values["furniture_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">KES <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
<?php
  echo '<a style="margin:20px 0" href="cart.php?action=empty"><button class="btn btn-danger" style="margin:20px 0"><span class="glyphicon glyphicon-trash"></span> Empty Cart</button></a>&nbsp;<a href="furniturelist.php"><button class="btn btn-warning" style="margin:20px 0">Continue Shopping</button></a>&nbsp;<a href="payment.php" ><button class="btn btn-success pull-right" style="margin:20px 0"><span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Oops! We can't see anything here. Go back and <a href="furniturelist.php">order now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "furniture_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'furniture_id' => $_GET["id"],
'furniture_name' => $_POST["hidden_name"],
'furniture_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'furniture_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'furniture_id' => $_GET["id"],
'furniture_name' => $_POST["hidden_name"],
'furniture_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'furniture_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["furniture_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Furniture has been removed")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}


?>
<?php

?>
<script src="js/script.js"></script>
    </body>
</html>