<!doctype html>
<html class="no-js" lang="en">

<head>

  <?php
     require('../database/core.php');
     require('../controllers/cartController.php');

     //session_start();

       
        
        function getIPAddress() {  
          //whether ip is from the share internet  
          if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
          }  
          //whether ip is from the proxy  
          elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
          }  
          //whether ip is from the remote address  
          else{  
              $ip = $_SERVER['REMOTE_ADDR'];  
          }  
           return $ip;  
        } 
        $ip_add = getIPAddress();
        
        $cart_total = total_qty_in_cart_controller();
        //var_dump($cart_total);
        if(isset($_SESSION['user_id'])){
          $user = $_SESSION['user_id'];
        }else{
        //header("Location: ../Login/login.php");
        }
        $result = view_cart_controller($ip_add, $user);
        // var_dump($result);
        // return;
        
        if(!check_login() === true){
          $account = '<div class="navbar-btn d-none d-sm-inline-block">
                          <a class="main-btn" data-scroll-nav="0" href="../login/login.php">Log In</a>
                      </div>';
        }else{
          $account = '<div class="navbar-btn d-none d-sm-inline-block">
                          <a class="main-btn" data-scroll-nav="0" href="../login/logout.php">Log Out</a>
                      </div>';

         // $result = select_all_services_controller();

      }
        
        ?>


    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Go Inside Fitness</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../assets/css/lineicons.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="../assets/css/animate.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="../assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="../assets/css/style.css">


    <!-- CART STYLE STARTS -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../CartAssets/css/animate.css">
    
    <link rel="stylesheet" href="../CartAssets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="../CartAssets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../CartAssets/css/magnific-popup.css">

    <link rel="stylesheet" href="../CartAssets/css/flaticon.css">

    <link rel="stylesheet" href="../CartAssets/css/style.css">

    <!-- CART STYLE ENDS -->
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->    
    
    <!--====== HEADER PART START ======-->
    
    <header class="header_area">        
        <div class="header_navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img style="height: 100px;" src="../assets/images/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a  href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="../index.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="../index.php">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="../index.php">Cases</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="../index.php">Growth</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="../index.php">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="../index.php">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./cart.php"> <div class="features_icon">Cart
                                           <span><i class="lni lni-cart-full"></i></span> 
                                        </div></a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <?php echo $account; ?>

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
<br><br>



<section>

<!--Grid row-->
<div class="row">
  <!--Grid column-->
  <div class="col-lg-8">

   
    <div class="mb-3">
      <div class="pt-4 wish-list">
        

        <div class="row mb-4">
          <div class="col-md-5 col-lg-3 col-xl-3">
            <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
             
            </div>
          </div>
          <div class="col-md-7 col-lg-9 col-xl-9">
          <h5 class="mb-4"><?php foreach($cart_total as $x){echo 'Cart Items: '.$x['SUM(quantity)'];}?></h5>
            <div>
            <table class="table caption-top">
              <caption>User Cart</caption>
              <thead>
                <tr>
                  <th scope="col">Service Title</th>
                  <th scope="col">Package Name</th>
                  <th scope="col">Package Price</th>
                  <th scope="col">Quantity</th>
                  <th></th>
                  <th>Sub-total</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                  $total=0;
                    if($result !== false){
                        foreach($result as $cart){
                          $total = $total + ($cart['package_price'] * $cart['quantity']);
                            echo"
                                <tr>
                                    <td>$cart[service_name]</td>
                                    <td>$cart[package_name]</td>
                                    <td>$cart[package_price]</td>
                                    
                                    <td>
                                      <form action='../actions/cartAction.php' method='post'>
                                        <input type= 'number' name='qty' value=".$cart['quantity'].">
                                        <input type='hidden' name='service_id' value=".$cart['service_id'].">
                                        <input type='hidden' name='customer_id' value='$user'>
                                        <input type='submit' class='btn btn-light' name='change_quantity' value='Change Qty'>
                                      </form>
                                    </td>

                                    <td>
                                      <form action='../actions/cartAction.php' method='post'>
                                        <input type='hidden' name='customer_id' value='$user'>
                                        <input type='hidden' name = 'package_id' value=".$cart['package_id'].">
                                        <input type='hidden' name='service_id' value=".$cart['service_id'].">
                                        <input type='submit' class='btn btn-primary btn-block' name='deleteProductID' value='Delete'>
                                      </form>
                                    </td>
                                    <td>$". $cart['package_price'] * $cart['quantity']."</td>  
                                    <td><a href='services.php' class=' btn btn-dark'>Continue Shopping</a></td>
                                    <td>
                                      <form action='../actions/orderAction.php' method='post'>
                                        <input type='hidden' name='total' value='$total'>
                                        <input type='hidden' name='service_id' value = '$cart[service_id]'>
                                        <input type='hidden' name = 'package_id' value=".$cart['package_id'].">
                                        <input type = 'hidden' name = 'amount' value='$total'>
                                        <input type='submit' name='proceed'  class='btn btn-primary btn-block' value='Proceed to Payment'>
                                      </form>
                                    </td>
                                </tr>
                              
                            ";
                        }
                        echo $total;
                    }else{
                        echo "<td>Cart is empty</td>";
                    }
                    
                    
                ?>
            </div>

      </div>
    </div>
   
  </div>
  

  </div>
  <!--Grid column-->

</div>
<!-- Grid row -->

</section>
<!--Section: Block Content-->

<!-- loader -->
<?php


?>

       






   
    
   








    <!--====== Jquery js ======-->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="../assets/js/slick.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="../assets/js/ajax-contact.js"></script>
    
    <!--====== Appear js ======-->
    <script src="../assets/js/jquery.appear.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="../assets/js/wow.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>
    
</body>

</html>
