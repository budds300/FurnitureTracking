<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}
require "./nav.php";
?>
<style>
  
input[type=text], select,input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
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

    
    	<div class="col-xs-3 align" style="text-align: center;">

    	<div class="list-group">
    		<a href="mystore.php" class="list-group-item active  btn-info ">My Store</a>
    		<a href="view_furniture_items.php" class="list-group-item   btn-info ">View Furniture Items</a>
    		<a href="add_furniture_items.php" class="list-group-item   btn-info ">Add Furniture Items</a>
    		<a href="edit_furniture_items.php" class="list-group-item   btn-info ">Edit Furniture Items</a>
    		<a href="delete_furniture_items.php" class="list-group-item   btn-info ">Delete Furniture Items</a>
        <a href="view_order_details.php" class="list-group-item btn-info ">View Order Details</a>
    	</div>

      <div class="col-xs-9">
        <div class="form-area" style="padding: 0px 100px 100px 100px;">
          <form action="mystore1.php" method="POST">
          <br style="clear: both">
            <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> MY STORE</h3>
  
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Your Stores's Name" required="">
            </div>
  
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your Stores's Email" required="">
            </div>     
  
            <div class="form-group">
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Your Stores's Contact Number" required="">
            </div>
  
            <div class="form-group">
              <input type="text" class="form-control" id="address" name="address" placeholder="Your Stores's Address" required="">
            </div>
  
            <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD STORE </button>    
        </div>
          </form>

    </div>
    


    

        
        </div>
      
    </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
<script src="./js/script.js"></script>
  </body>
</html>