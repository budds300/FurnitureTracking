    <?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: furniturelist.php"); 
}
include 'nav.php'
?>

<style>
  .edit{
  text-shadow: 2px 2px 5px lightgreen;
  color: green;
}
</style>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

   

    

    <div class="container">
    <div class="jumbotron">
     <h1>Hi Guest,<br> Welcome to <span class="edit"> Beta Funiture' </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div>

    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"style="text-align:center;"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label> -->
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label> -->
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a style="color: blue;" href="customersignup.php">Create a new account.</a></label>

        </form>
        </div>     
      </div>      
    </div>
    </div>

   <script src="js/script.js"></script>
    </body>
</html>