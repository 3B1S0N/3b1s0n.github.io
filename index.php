<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php
     require('./database/core.php');
        if(!check_login() === true){
            $account = '<div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" data-scroll-nav="0" href="./login/login.php">Log In</a>
                        </div>';
        }else{
            $account = '<div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" data-scroll-nav="0" href="./login/logout.php">Log Out</a>
                        </div>';

           // $result = select_all_services_controller();

        }


?>

  <body>
  <?php echo $account; ?>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Go Inside Fitness</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/GOicon.png" type="image/png">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
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
                                <img style="height: 100px;" src="assets/images/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#case">Cases</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#growth">Growth</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./views/cart.php"> <div class="features_icon">Cart
                                           <span><i class="lni lni-cart-full"></i></span> 
                                        </div></a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <?php echo $account ?>
                            
                            <!-- <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="./login/login.php">Log In</a>
                            </div> -->

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
        
        <div id="home" class="header_slider">
            <div class="container-fluid">
                <div class="slider-active">
                    
                    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(assets/images/Home2.JPG)">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="slider_content">
                                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">Creative and expert Fitness Advisers</h2>
                                        <p data-animation="fadeInUp" data-delay="0.6s">With a healthy mix of researched fitness strategies and an underlying theme of fun, Go Inside Fitness presents to you a dynamic duo, dedicated to bring your fitness dreams and aspirations to life.</p>
                                    </div> <!-- slider content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- single slider -->

                    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(assets/images/Home3.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider_content">
                                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">INSIDE!</h2>
                                        <p data-animation="fadeInUp" data-delay="0.6s">Here at Go Inside Fitness, we have a chant we use to generate an adrenaline boost when we feel we are at our breaking point. Though just a word, the culture and strategy of our sessions creates a psychological effect allowing you dive deeper into yourslef and push your limits. </p>
                                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="4s">Learn More</a>
                                    </div> <!-- slider content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- single slider -->

                    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(assets/images/Home1.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider_content">
                                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">Imrpove Your Strength</h2>
                                        <p data-animation="fadeInUp" data-delay="0.6s">Ever just wanted to get stronger and perform higher feats that move beyond standard fitness and health? Go Inside Fitness can provide you with key insights that not only improve your fitness but your overall strength level too.</p>
                                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="4s">Learn More</a>
                                    </div> <!-- slider content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- single slider -->
                    
                    
                </div> <!-- slider Active -->
            </div> <!-- container fluid -->
        </div> <!-- header slider -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->


    <!--====== FEATURES PART START ======-->

    <section id="why" class="features_area pt-100 pb-100 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_title text-center pb-10">
                        <h4 class="sub_title">Why Choose Us?</h4>
                        <h3 class="title">We Provide Fitness For All</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="features_icon">
                            <i class="lni lni-certificate"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Certified</a></h4>
                            <p>Our team has certified work out plans, helath advice and expertise to aid clients.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="features_icon">
                            <i class="lni lni-dumbbell"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Equipment</a></h4>
                            <p>We have partnered with Echo Weights to provide clients with eco-friendly gym eqipment. </p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="features_icon">
                            <i class="lni lni-consulting"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Tailored</a></h4>
                            <p>Our business model is built around a personalised experience that will push anyone towards their goals.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
                        <div class="features_icon">
                            <i class="lni lni-headphone-alt"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Dedicated</a></h4>
                            <p>Go Inside Fitness is dedicated to each and every client and we provide excellent support systems at all aspects of your journey.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about_image mt-50">
                        <img src="assets/images/Experience.png" alt="about image">
                        <div class="experiance d-flex justify-content-center align-items-center text-center wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="experiance_wrapper text-center">
                                <span>4</span>
                                <p>Years of Experiance</p>
                            </div>
                        </div>
                        <div class="about_shape">
                            <img src="assets/images/shape-1.svg" alt="shape">
                        </div> <!-- about shape -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-5">
                    <div class="about_content mt-45">
                        <div class="section_title">
                            <h4 class="sub_title">About Us</h4>
                            <h3 class="title">Proving that a fitness lifestyle can be for everyone</h3>
                        </div> <!-- section title -->
                        <p>It is often said that maintaing a fit lifestyle is difficult and or the procedure to do so is "not for me." Go Inside Fitness aims to not only disprove that but to enforce the idea that consistent fitness that lead to your goals being met, is for everyone. Below lie the focus areas our clients look our for and our covered in our prmium plans.</p>
                        
                        <div class="about_skills pt-15">
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Weight Gain</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">75</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="75"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Weight Loss</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">88</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="88"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Diet Training</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">65</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="65"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                        </div> <!-- about skill -->
                    </div>  <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services_area pt-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Services</h4>
                        <h3 class="title">We Offer Best Financial Consultancy Services in Affordable Cost</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-offer"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="./views/LitePackages.php">Go Inside: Lite</a></h4>
                            <p></p>
                        </div>
                    </div> <!-- single services -->
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="services_content">
                            <h3 class="services_title"><a href="#"> Service Renewal</a></h3>
                            <p></p>
                        </div>
                    </div> <!-- single services -->
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-offer"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="./views/premiumPackages.php">Go Inside: Premium</a></h4>
                            <p></p>
                        </div>
                    </div> <!-- single services -->
                </div> 
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->



    <!--====== GROWTH PART START ======-->

    <section id="growth" class="growth_area pt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="growth_content mt-45">
                        <div class="section_title ">
                            <h4 class="sub_title">Track Your Gains</h4>
                            <h3 class="title">Committed to Grow Yourself Like Never Before</h3>
                        </div> <!-- section title -->
                        
                        <p>Go Inside is a company that is focused on results its clients achieve overr the course of their journey, both during and after contact with our services. We enhance not only your ability to achieve your gains but your ability to track them effectively as well.</p>
                        
                        <h5 class="growth_title">Real-Time Analytics</h5>
                        
                        <p>Analytics are as much an important aspect of your fitness journey as the work outs you do and the diets you adopt. We help track objective and subjective analytics to ensure your growth rate with our product.</p>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6">
                    <div class="growth_image mt-50">
                        <img class="image" src="./assets/images/graph.jpg" alt="screenshot">
                    </div> <!-- growth image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="growth_shape">
            <img class="shape" src="assets/images/shape-2.svg" alt="shape">
        </div>
    </section>

    <!--====== GROWTH PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team_area pt-95 pb-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Team</h4>
                        <h3 class="title">Meet Our <br>Committed Team Members</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="team_image">
                            <img src="assets/images/Nat.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Nathaniel Oppong</a></h4>
                            <p>Co-Founder and Trainer</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="team_image">
                            <img src="assets/images/Padi.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Padi B</a></h4>
                            <p>Co-Founder and Trainer</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="team_image">
                            <img src="assets/images/team-3.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Akwasi Frimpong</a></h4>
                            <p>Graphics & Marketing Lead </p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
                        <div class="team_image">
                            <img src="assets/images/team-4.jpg" alt="team">
                        </div>
                        <div class="team_content">
                            <h4 class="team_name"><a href="#">Chief Tawiah</a></h4>
                            <p>Financial Advisor</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial_area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Testimonials</h4>
                        <h3 class="title">What Our Clients<br> Says About Go Inside</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial_active">
                <div class="col-lg-6">
                    <div class="single_testimonial">
                        <div class="testimonial_author">
                            <img src="assets/images/Toby.JPG" style="height:100px; width: 90px;" alt="author">
                        </div>
                        <div class="testimonial_content">
                            <i class="lni lni-quotation"></i>
                            <div class="testimonial_name">
                                <h5 class="name">Toby Woode</h5>
                                <span class="sub_title">Student</span>
                            </div>
                            <p>"I have definitely excercised before but I had never been on a proper fitness pla, Go Inside allowed me to gain 4kg of muscle mass and helped me look and feel my best!"</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single_testimonial">
                        <div class="testimonial_author">
                            <img src="assets/images/annie.jpg" style="height:100px; width: 90px;" alt="author">
                        </div>
                        <div class="testimonial_content">
                            <i class="lni lni-quotation"></i>
                            <div class="testimonial_name">
                                <h5 class="name">Annete Dawson</h5>
                                <span class="sub_title">Social Media Influencer</span>
                            </div>
                            <p>"I'm a new at fitness and wanted to start a fitness journey to help influencer page and Go Inside was so helpful. They gave me the best advice, taught me how to be consistent and was so supportive."</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single_testimonial">
                        <div class="testimonial_author">
                            <img src="assets/images/Nicole.jpg" style="height:100px; width: 90px;" alt="author">
                        </div>
                        <div class="testimonial_content">
                            <i class="lni lni-quotation"></i>
                            <div class="testimonial_name">
                                <h5 class="name">Nicole Asare</h5>
                                <span class="sub_title">Student</span>
                            </div>
                            <p>"I was able to lose 6kg over my fitness journey and this was so huge for me. Thank you Go Inside !!"</p>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BLAG PART START ======-->

    <section id="blog" class="blog_area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Blog</h4>
                        <h3 class="title">Recently Published<br> Blog Posts</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/muscleMass.jpg" style="height: 350px;" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="blog_title"><a target="_blank" href="https://www.everyoneactive.com/content-hub/gym/eight-tips-help-build-muscle-mass/">8 Tips to Increase Muscle Mass</a></h4>
                            <p>Building muscle requires a positive energy balance, which means that you must take in more calories than you burn. You need roughly 2,800 calories to build a pound of muscle...</p>
                            <a class="more" target="_blank" href="https://www.everyoneactive.com/content-hub/gym/eight-tips-help-build-muscle-mass/">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>  <!-- single_blog -->
                </div>
                <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/bellyFat.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <h4 class="blog_title"><a target="_blank" href="https://www.healthline.com/nutrition/20-tips-to-lose-belly-fat">How to Reduce Belly Fat</a></h4>
                            <p>Some studies have linked a high intake of trans fat to increased belly fat gain. Regardless of whether you’re trying to lose weight, limiting your intake of trans fat is a good idea...</p>
                            <a class="more" target="_blank" href="https://www.healthline.com/nutrition/20-tips-to-lose-belly-fat">Read More <i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>  <!-- single_blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLAG PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer_area">
        <div class="container">
            <div class="footer_wrapper pt-50 pb-100">
                <div class="row">
                    <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                        <div class="footer_about mt-50">
                            <a href="#">
                                <img style="height: 100px;" src="assets/images/logo.png" alt="">
                            </a>
                            <p>Lorem ipsum dolor sitco nsetetu nonumy eirmod tempor invidunt ut labore etert dolore magna uyam Lorem ipsum dolor sitco nsetetu.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-12 order-md-3 order-lg-2">
                        <div class="footer_link_wrapper d-flex flex-wrap">
                            <div class="footer_link mt-45">
                                <h4 class="footer_title">Quick Link</h4>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Case Study</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div> <!-- footer link wrapper -->
                    </div>
                    <div class="col-lg-4 col-md-6 order-md-2 order-lg-3">
                        <div class="footer_form mt-45">
                            <h4 class="footer_title">Get in Touch</h4>
                            <form id="contact-form" action="assets/contact.php">
                                <div class="single_form">
                                    <input type="text" placeholder="Name" name="Name">
                                </div> <!-- single form -->
                                <div class="single_form">
                                    <input type="text" placeholder="Email" name="email">
                                </div> <!-- single form -->
                                <div class="single_form">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div> <!-- single form -->
                                <p class="form-message"></p>
                                <div class="single_form">
                                    <button class="main-btn">Send</button>
                                </div> <!-- single form -->
                            </form>
                        </div> <!-- footer form -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer wrapper -->
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
</body>

</html>
