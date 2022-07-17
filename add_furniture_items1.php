<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}


if(isset($_POST['submit'])){
  if(isset($_FILES['image']['name'])){
    // upload Image ony if selected
    $images_path=$_FILES['image']['name'];
    if($images_path !=""){
      
      // print_r($_FILES['image']);
    
    // To upload one needs image name,source path and destionation path
    // auto renaming images       
    // Get the extension of our image(jpg,png,gif,etc)e.g. "special foods.png
     $temp = explode('.',$images_path);
     $ext= end($temp);
    // rename the image
    $images_path="Furniture_item".rand(000,999).'.'.$ext;
    $source_path=$_FILES['image']['tmp_name'];
    $destination_path="./images/Furniture_item/".$images_path;
    $upload =move_uploaded_file($source_path,$destination_path);
    // check if uploaded image or not
        if($upload == false){
            $_SESSION['upload']= 'Failed to upload image';
            header("location: ./a.php?successfullyUpdated");
            die(); 
        }
  }
  }

  else{ 
    echo "nothing";
    $images_path="";}

  $name = $conn->real_escape_string($_POST['name']);
  $price = $conn->real_escape_string($_POST['price']);
  $description = $conn->real_escape_string($_POST['description']);
  
  // Storing Session
  $user_check=$_SESSION['login_user1'];
  $R_IDsql = "SELECT STORES.R_ID FROM STORES WHERE STORES.M_ID='$user_check'";
  $R_IDresult = mysqli_query($conn,$R_IDsql);
  $R_IDrs = mysqli_fetch_array($R_IDresult, MYSQLI_BOTH);
  $R_ID = $R_IDrs['R_ID'];
  

  
  $query = "INSERT INTO FURNITURE(name,price,description,R_ID,images_path) VALUES('" . $name . "','" . $price . "','" . $description . "','" . $R_ID ."','" . $images_path . "')";
  $success = $conn->query($query);
}

if (!$success){

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	<link rel="stylesheet" type = "text/css" href ="css/add_furniture_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
	
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Furniture'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>


	<div class="container">
    <div class="jumbotron">
     <h1>Oops...!!! </h1>
     <p>Kindly enter your Store details before adding Furniture items.</p>
     <p><a href="mystore.php"> Click Me </a></p>

    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
	
	</html>

	<?php
	
}
else {
	echo "SUCCESS";
	header('Location: add_furniture_items.php');
}

$conn->close();


?>