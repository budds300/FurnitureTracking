<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
include 'nav.php'
?>
  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  




 
    <div class="carousel-item active" data-bs-interval="10000" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.7)), url(./images/photo-1538688525198-9b88f6f53126.avif);height:70vh;background-size:cover;background-position:center;background-repeat:no-repeat;" >
      
    </div>
   


<div class="jumbotron">
  <div class="container text-center">
    <h1>Welcome To Beta Furniture'</h1>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>




<div class="container" style="width:95%;">

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM furniture WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
    echo "<div class='row'>";
    $image_name=$row['images_path'];

?>
<div class="col-md-3">

<div class="furniture-menu-box">
  <form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
  <div class="mypanel" align="center";>
    <div class="furniture-menu-img">
        <!-- if image is available or not -->
            <?php if($image_name == ""){
            echo '<div class="error">Image not available</div>';
        } else{?>
        <img src="./images/Furniture_item/<?php echo $image_name ?>" class="img-responsive">
    </div>
        <?php
    }?>
    <!-- display details from db -->
    <div class="furniture-menu-desc">
    <h3 class="text-dark"><?php echo $row["name"]; ?></h3>
        <h5 class="furniture-price">KES <?php echo $row["price"]; ?>/-</h5>
        <h5 class="furniture-detail"><?php echo $row["description"]; ?></h5>
        <h5 class="furniture-detail">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
        <br>
        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
        <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
        <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
        </div>
        </div>
        <?php
            
        
    
  
    ?>

</form>
</div>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No Furniture is available.</h1> </label>
        <p>Stay Safe...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>

<script src="js/script.js"></script>
</body>
</html>