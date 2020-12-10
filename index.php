<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
      <?php
        include 'style/style.css';
        ?> 
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Hover-master/css/hover-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Sterling Crate</title>
  </head>
  <body>
    
    <!-- registration form link -->
    <?php
    include 'registration.php';
    ?>
    <!-- registration form link  -->

    <!-- Navbar Start -->
     
      <header >
        <nav class="navbar navbar-expand-lg  fixed-top bgcolor">
        <div class="container " > 
          <img src="./Images/logo.png" class="hvr-bounce-in" alt="Stering Crate">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto "> 
            <li class="nav-item active">
              <a class="nav-link hvr-underline-from-left" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-underline-from-right" href="#SearchBar-div">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-underline-from-right" href="#CardSection-div">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-underline-from-left" href="#ExtraInfo-div">Our Brands</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-underline-from-right" href="#ContactForm-div" id="Signin">Sign In</a> 
            </li>
          </ul>
          <!-- </form> -->
        </div>
      </div>
      </nav>
    
    <!-- Navbar End -->


    <!-- Carousel Section Start -->
    <div id="carouselExampleIndicators" class="carousel" data-interval="false" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <!-- SLIDER START  -->
      <div class="carousel-inner">
        <!-- slider1  -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="carousel-caption">
              <div class="col-md-12">
                <h3 class="text-uppercase text-left"></h3>
            <h4 class="text-uppercase text-left animated bounceInLeft">The Best <span>Gift Shop</span></h4>
            <h1 class="text-left">Creating Hapiness For <br> Your Loved Ones</h1>
            <p class="text-left">Browse thorugh some of the largest collection of gifts to birghten your day </p>
            <div class="text-left">    
              <p><a class="btn hvr-pulse-grow animated flash" href="#" role="button">Shop Now</a> </p> 
          </div>
            </div>
            </div>
          </div>
        </div> 
          <img class="d-block w-100" src="./Images/slider2.jpg" alt="Second slide">
        </div>
        <!-- slider1  -->
                          <!-- ------------------ -->
        <!-- slider2  -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="carousel-caption">
              <div class="col-md-12">
            <h4 class="text-uppercase animated bounceInRight" style="animation-delay: 1s">The Best <span>Gift Shop</span></h4>
            <h1 class="animated bounceInLeft" style="animation-delay: 2s">Creating Hapiness For<br> Your Loved Ones</h1>
            <p class="animated bounceInRight" style="animation-delay: 3s">Browse thorugh some of the largest collection of gifts to birghten your day </p>
               <p class="hvr-bounce-in"><a class="btn animated bounceInLeft " style="animation-delay: 4s" href="#" role="button">Shop Now</a> </p> 
            </div>
            </div>
          </div>
        </div>  
          <img class="d-block w-100" src="./Images/slider1.jpg" alt="First slide">
        </div>
        <!-- slider2  -->
                          <!-- ------------------ -->
        <!-- slider3  -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="carousel-caption">
              <div class="col-md-12">
            <h4 class="text-uppercase animated bounceInRight" style="animation-delay: 1s">The Best <span>Gift Shop</span></h4>
            <h1 class="animated bounceInLeft" style="animation-delay: 2s">Creating Hapiness For<br> Your Loved Ones</h1>
            <p class="animated bounceInRight" style="animation-delay: 3s">Browse thorugh some of the largest collection of gifts to birghten your day </p>
               <p class="hvr-bounce-in"><a class="btn animated bounceInLeft " style="animation-delay: 4s" href="#" role="button">Shop Now</a> </p> 
            </div>
            </div>
          </div>
        </div>  
          <img class="d-block w-100" src="./Images/slider3.jpg" alt="First slide">
        </div>
        <!-- slider3  -->
        
        <!-- SLIDER END -->
      </div>

      <!-- controlers left and right -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!-- controlers left and right -->

    </div> 
    <!-- Carousel Section End -->

  </header>

<!-- SearchBar Starts -->
  <section class="SearchBar" id="SearchBar-div">
      <div class="container">
        <div class="row info-card animated fadeInLeftBig">
            <div class="col-md-2">
              <img src="./Images/gifticon2.png" class="hvr-grow">
            </div>
            
            <div class="col-md-3">
              <div class="dropdown">
                <h6>Where To Deliever?</h6>
                <button class="btn btn-secondary dropdown-toggle dropdown-btn" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select Destination
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Karachi</a>
                  <a class="dropdown-item" href="#">Islamabad</a>
                  <a class="dropdown-item" href="#">Lahore</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="dropdown">
                <h6>When Type of Gift?</h6>
                <button class="btn btn-secondary dropdown-toggle  gift-type-btn dropdown-btn text-left" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Gift Type
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Flower Bouqet</a>
                  <a class="dropdown-item" href="#">Tumblers</a>
                  <a class="dropdown-item" href="#">Something special</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <button type="button" class="btn Card-btn">Find Gift</button>
            </div>
          </div>
      </div>
  </section>
<!-- SearchBar Ends -->


<!-- CardSection Starts -->
    <section class="Card-Section" id="CardSection-div">
        <h1 class="text-center">We Don't Send Gifts.</h1>
        <h3 class="text-center">We Deliever Happiness</h3> 
            <hr style="border-top: 1px solid white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 cards" >
                    <img src="./Images/gift.png" alt="giftbox">
                    <h6 class="text-center">Birhday Gift's</h6>
                    <p>Turned it up should no valley cousin he. Speaking numerous ask did horrible packages set.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 cards">
                    <img src="./Images/flower-bouquet.png" alt="Bouqet">
                    <h6 class="text-center">Birhday Gift's</h6>
                    <p>Turned it up should no valley cousin he. Speaking numerous ask did horrible packages set.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 cards">
                    <img src="./Images/cake-icon.png" alt="cake">
                    <h6 class="text-center">Birhday Gift's</h6>
                    <p>Turned it up should no valley cousin he. Speaking numerous ask did horrible packages set.</p>
                </div>
            </div>
        </div>
  </section>
<!-- CardSection Ends  -->


<!-- OfferSection Starts -->
<section class="extra-div" id="ExtraInfo-div">
  <div class="container ">
  <h1 class="text-center">Gift Items</h1>
  <hr>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center">
      <div class="card_item border-primary" style="width: 15rem;">
            <img class="card-img-top" src="./Images/dress.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build.<br> <span class="price">$99.99</span> <br> <s>$50.50</s> -7% 
            <br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center">
      <div class="card_item border-primary" style="width: 15rem;">
            <img class="card-img-top" src="./Images/toys.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build.<br> <span class="price">$99.99</span> <br> <s>$50.50</s> -7% 
            <br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center">
      <div class="card_item border-primary" style="width: 15rem;">
            <img class="card-img-top" src="./Images/watch.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build.<br> <span class="price">$99.99</span> <br> <s>$50.50</s> -7% 
            <br>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </p>
          </div>
        </div>
      </div>
    </div> <!-- row end  -->
    <div class="text-center">
    <p><a class="btn" href="#" role="button">View all</a> </p>
    </div>
  </div> <!-- container end  -->
</section>
<!-- OfferSection Ends  -->


<!-- FORM Starts  -->
<div class="container ContactForm mt-4" id="ContactForm-div">
      

      <h1 class="text-center">Sign Up With Sterling Crate</h1>
      <div class="col-md-6 offset-md-3 ">
       
          <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter Your Email address" name="email" required>
          </div>
           

          <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter password" name="password" required>
          </div>
          <div class="text-center">
          <button type="submit" name="submit" class="btn btn-default text-center">Create Account</button> 
        </div>
        <p class="text-center">already have an Account? <a href="reg.php">Login</a></p>
  </div>
  </form>
  </div>   
<!-- FORM Ends  -->

<!-- Footer -->
<footer>
<div class="container">
<div class="row">
       <div class="col-md-5">
         <p>All rights reserved. Careem, an Uber company © 2020</p>
        </div>
        <div class="col-md-1">
          <img src="./Images/facebook-icon1.png" alt="facebook-icon">
        </div>
        <div class="col-md-1">
          <img src="./Images/instagram-icon.png" alt="facebook-icon">
        </div>
        <div class="col-md-1">
          <img src="./Images/twitter-icon1.png" alt="facebook-icon">
        </div>
        <div class="col-md-4">
          <p>Terms Of Service Privacy Policy </p>
        </div>
      </div>
      <!-- Top Arrow Button Starts  -->
      <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
      </div>
      <!-- Top Arrow Button Ends  -->
    </div>
  </footer>  
  
  <!-- footer Ends -->
   


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.      js"integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj3xub8oapVMaIijPNoM0DHoAtgh/       gwFYuN5rik=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
    <!-- Scripts -->

</body>
</html>