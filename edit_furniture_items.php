<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 

}
require './nav.php';
?>

<style>
  .form-area {
  background-color: #FAFAFA;
  padding: 10px 40px 60px;
  margin: 50px 50px 60px;
  border: 1px solid GREY;
  opacity:0.9;
}
.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;

}


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}
.black{
  color: black;
}
</style>



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
    


    
    

<div class="col-xs-3">

  <div class="form-area" style="padding: 10px 10px 110px 10px; ">
  
    <div class="" style="text-align: center;">
      <h3>Click On Menu <br><br></h3>
    </div>
    <?php
   
 

    if (isset($_GET['submit'])) {
    $F_ID = $_GET['dfid'];
    $name = $_GET['dname'];
    $price = $_GET['dprice'];
    $description = $_GET['ddescription'];


    $query = mysqli_query($conn, "UPDATE furniture set
    name='$name', price='$price',
    description='$description' where F_ID='$F_ID'");
    }
    $query = mysqli_query($conn, "SELECT * FROM furniture f WHERE f.R_ID IN (SELECT r.R_ID FROM stores r WHERE r.M_ID='$user_check')AND options='ENABLE' ORDER BY F_ID");
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group-update" style="text-align: center;color:black;">
        <?php
      echo "<b ><a style='color:black' href='edit_furniture_items.php?update={$row['F_ID']}'>{$row['name']}</a></b>";  
        ?>
      </div>


    <?php
    }
    ?>
    

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($conn, "SELECT * FROM furniture WHERE F_ID=$update");
    while ($row1 = mysqli_fetch_array($query1)) {

    ?>
</div>
</div>



<div class="container">
<div class="col-md-6">
 <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="edit_furniture_items.php" method="GET">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT YOUR FURNITURE ITEMS HERE </h3>

          <div class="form-group">
            <input class='input' type='hidden' name="dfid" value=<?php echo $row1['F_ID'];  ?> />
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Furniture Name: </label>
            <input type="text" class="form-control" id="dname" name="dname" value=<?php echo $row1['name'];  ?> placeholder="Your Furniture name" required="">
          </div>     

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Furniture Price: </label>
            <input type="text" class="form-control" id="dprice" name="dprice" value=<?php echo $row1['price'];  ?> placeholder="Your Furniture Price (INR)" required="">
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Furniture Description: </label>
            <input type="text" class="form-control" id="ddescription" name="ddescription" value=<?php echo $row1['description'];  ?> placeholder="Your Furniture Description" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Update </button>    
      </div>
        </form>


    <?php
}
}


  ?>
      
  </div>




</div>


<?php
mysqli_close($conn);
?>
</div>
</div>

  </body>
<br>
</html>