<?php
require('../database/core.php');
require('../controllers/clientController.php');
if(check_login() === false  && check_permission() === false){
    header("Location: ../login/login.php");
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <h1 class="text-white p-2">Admin</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <a href="../login/logout.php"  class="text-white p-2 no-underline hidden md:block lg:block">Logout</a>
                </div>
            </div>

        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="index.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                </ul>
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="packages.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Packages
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                </ul>
                <ul class="list-reset flex flex-col">
                        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                            <a href="services.php"
                               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                                Services
                                <span><i class="fas fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                </ul>
                <ul class="list-reset flex flex-col">
                            <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                                <a href="orders.php"
                                    class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        <i class="fas fa-tachometer-alt float-left mx-2"></i>
                                        Orders
                                        <span><i class="fas fa-angle-right float-right"></i></span>
                                     </a>
                            </li>
                </ul>
                
                   
            
            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="orders.php" class="no-underline text-white text-2xl">
                                    
                                </a>
                                <a href="orders.php" class="no-underline text-white text-lg">
                                    Total Orders
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Customers
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="services.php" class="no-underline text-white text-2xl">
                                    
                                </a>
                                <a href="services.php" class="no-underline text-white text-lg">
                                    Total Services
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="packages.php" class="no-underline text-white text-2xl">
                                    
                                </a>
                                <a href="packages.php" class="no-underline text-white text-lg">
                                    Total Packages
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                        <!-- card -->
                        
                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Trending Categories</div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-grey-darkest">
                                    <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Current</th>
                                        <th scope="col">Change</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                Twitter
                                            </button>
                                        </td>
                                        <td>4500</td>
                                        <td>4600</td>
                                        <td>
                                            <span class="text-green-500"><i class="fas fa-arrow-up"></i>5%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <button class="bg-primary hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full">
                                                Facebook
                                            </button>
                                        </td>
                                        <td>10000</td>
                                        <td>3000</td>
                                        <td>
                                            <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <button class="bg-success hover:bg-success-dark text-white font-light py-1 px-2 rounded-full">
                                                Amazon
                                            </button>
                                        </td>
                                        <td>10000</td>
                                        <td>3000</td>
                                        <td>
                                            <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                Microsoft
                                            </button>
                                        </td>
                                        <td>10000</td>
                                        <td>3000</td>
                                        <td>
                                            <span class="text-green-500"><i class="fas fa-arrow-up"></i>65%</span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /Cards Section Ends Here -->

                    <!-- Progress Bar -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full pt-2">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Progress Among Projects</div>
                            </div>
                            <div class="">
                                <div class="w-full">

                                    <div class="shadow w-full bg-grey-light">
                                        <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white"
                                             style="width: 45%">45%
                                        </div>
                                    </div>


                                    <div class="shadow w-full bg-grey-light mt-2">
                                        <div class="bg-teal-500 text-xs leading-none py-1 text-center text-white"
                                             style="width: 55%">55%
                                        </div>
                                    </div>


                                    <div class="shadow w-full bg-grey-light mt-2">
                                        <div class="bg-orange-500 text-xs leading-none py-1 text-center text-white"
                                             style="width: 65%">65%
                                        </div>
                                    </div>


                                    <div class="shadow w-full bg-grey-300 mt-2">
                                        <div class="bg-red-800 text-xs leading-none py-1 text-center text-white"
                                             style="width: 75%">75%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Profile Tabs-->
                    
                    <!--/Profile Tabs-->
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
            <div class="flex flex-1 mx-auto">Distributed by:  <a href="https://themewagon.com/" target=" _blank">Themewagon</a></div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="./main.js"></script>
</body>

</html>