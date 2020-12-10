<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --> 

    <link rel="stylesheet" type="text/css" href="css/style.php">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <style type="text/css">
    <?php 
      include 'style.css'
    ?>
    </style>


    <title>PHP LOGIN!</title>
  </head>
  <body>
  <?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con, $_POST['username'] );
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $password = mysqli_real_escape_string($con, $_POST['password'] );
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

  $pass = password_hash($password, PASSWORD_BCRYPT); // encryption of password.
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT); // encryption of re-entered password.


  $emailQuery = " SELECT * FROM registration where email = '$email' ";
  $query = mysqli_query($con, $emailQuery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount > 0){
    ?>
        <script>
          alert("Email Already Exists");
        </script>
        <?php
  }else{
    if($password === $cpassword){
      $insertquery = "INSERT INTO registration(username,email,phone, password ,cpassword) values ('$username','$email','$phone','$pass','$cpass')";

      $iquery = mysqli_query($con, $insertquery);

      if($iquery){
        ?>
            <script>
              alert('Data inserted');
            </script>
        <?php
      }else{
        ?>
            <script>
              alert('Data Not inserted');
            </script>
        <?php
      }

    }else{
      ?>
      <script>
        alert("Password Not Matching");
      </script>
      <?php
    }
  }
}

?>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
       
    </ul>
  </div>
</nav>
<!-- Form Start -->
<div class="container ContactForm" id="ContactForm-div">
     <form action="" method="POST">
      <div class="col-md-10 col-md-offset-1 ">
        <div class="dropdown text-right">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            EN
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">اردو</a>
            <a class="dropdown-item" href="#">ESPN</a>
            <a class="dropdown-item" href="#">English(UK)</a>
          </div>
        </div>
      </div>
      <h1 class="text-center">Sign Up With Sterling Crate</h1>
      <div class="col-md-10 offset-md-1 ">
      <div class="form-group"> 
          <div class="row">
              <div class="col-md-12">
          <input type="text" class="form-control" placeholder="Full name" name="username">
          </div>
          </div>
          </div>
          <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter Your Email address" name="email" required>
          </div>
          <div class="form-group">
          <input type="PhoneNumber" class="form-control" placeholder="Enter Your mobile number" name="phone" required>
          </div>

          <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter password" name="password" required>
          </div>

          <div class="form-group">
          <input type="password" class="form-control" placeholder="Re-enter password" name="cpassword" required>
          </div>
          <div class="text-center">
          <button type="submit" name="submit" class="btn btn-default text-center">Create Account</button> 
        </div>
        <div class="or-container text-center">
          <div class="line-separator"></div>
          <div class="or-label">or</div>
          <div class="line-separator"></div>
      </div>
        <div class="text-center"> 
          <button class="btn btn-lg btn-facebook btn-block text-uppercase btn-outline" href="#"><img src="./Images/man-icon.png"> Signup Using Facebook</button>
        </div>
        <p class="text-center">already have an Account? <a href="reg.php">Login</a></p>
  </div>
  </form>
  </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>