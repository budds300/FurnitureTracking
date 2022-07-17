<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Furniture System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="./css/styles.css">
    
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar text-white">
        <div class="container">
            <div class="logo">
            <a href="index.php" title="">
                    <strong>
                      <p>Beta Furniture </p>
                    </strong>
            </div>

            <div class="menu text-right">
          
        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="nav navbar-nav">
               
                
            
            <?php if(isset($_SESSION['login_user1'])){

?>

        
          
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="mystore.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          
<?php
}
else if (isset($_SESSION['login_user2'])) {
  $username= $_SESSION['login_user2'];
    ?>
            <li class="" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="#"><span class=""></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="furniturelist.php"><span class=""></span> Furniture Zone </a></li>
            <li><a href="cart.php"><span class=""></span> Cart
                (<?php
                if(isset($_SESSION["cart"])){
                $count = count($_SESSION["cart"]); 
                echo "$count"; 
              }
                else
                  echo "0";
                ?>)
               </a></li>
               <li><a href="order_status.php"><span class="glyphicon glyphicon-log-out"></span>Status </a></li>
              <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
            
    <?php } else{

  ?>
                 <li class="" ><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li> <a href="customerlogin.php">  Login</a></li>
                <li> <a href="managerlogin.php"> Manager </a></li>
                
              <?php } ?>
            </ul>
        </div>

            <div class="clearfix"></div>
        </div>
    </section>