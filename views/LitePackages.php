<!doctype html>
<html class="no-js" lang="en">

<head>

<?php
     require('../database/core.php');
     require('../controllers/servicesController.php');
     $services = get_service_controller(1);

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
                                        <a class="page-scroll" href="../index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="../index.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="../index.php">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="../index.php">Cases</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="../index.php">Growth</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="../index.php">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="../index.php">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./cart.php"> <div class="features_icon">Cart
                                           <span><i class="lni lni-cart-full"></i></span> 
                                        </div></a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <? echo $account ?>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
        
        <br><br><br><br><br>   
<section id="services" class="services_area pt-95">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center pb-15">
                    <h4 class="sub_title"><?php echo $services['service_package'];?> Packages</h4>
                    <h3 class="title">We Offer Best Fitness Options for Various Body Types</h3>
                </div> <!-- section title -->
            </div>
            <div class="row">


                    <?php

            $services = select_all_lite_services_controller();

           

                if (is_array($services) || is_object($services)){

                   

                    foreach($services as $service){
                        //echo "../assets/images/".$service["service_image"];
                        echo "

                        <div class='col-lg-6'>
                            <div class='single_blog mt-30'>
                                <div class='blog_image'>
                                <img src='../assets/images/{$service["service_image"]}' alt='blog' style= 'height: 400px;'>
                                </div>
                                <div class='blog_content'>
                                    <h4 class='blog_title'><a href='#'>".$service['service_name']."</a></h4>
                                    <p>".$service['service_desc']."</p>
                                    <p><a class='more' href=' singleService.php?id=".$service['service_id']."class='btn btn-primary'> View More <i class='lni lni-chevron-right'></i></a></p>
                                
                                   
                                </div>
                            </div> 
                        </div>";
                    }
                }else{echo"It appears this is not an array";}
                    ?>



            </div>
        </div>
    </div>
</section>




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