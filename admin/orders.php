<?php
require('../database/core.php');
require('../controllers/paymentController.php');

if(check_login() === false  && check_permission() === false){
    header("Location: ../login/login.php");
}
$orders = get_all_orders_controller();
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
    <title>Admin | Packages</title>
</head>

<body>
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
                        <a href="../Login/logout.php"  class="text-white p-2 no-underline hidden md:block lg:block">Logout</a>
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
    
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">
            
                <!--/Grid Form-->

                  <!-- Card Sextion Starts Here -->
                  <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

<!-- card -->
<div class='flex flex-1  flex-col md:flex-row lg:flex-row mx-2'>
                        <div class='mb-2 border-solid border-gray-300 rounded border shadow-sm w-full'>
                            <div class='bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b'>
                                Full Table
                            </div>
                            <div class='p-3'>
                                <table class='table-responsive w-full rounded'>
                                    <thead>
                                      <tr>
                                        <th class='border w-1/4 px-4 py-2'>Order ID</th>
                                        <th class="border w-1/4 px-4 py-2">First Name</th>
                                        <th class='border w-1/6 px-4 py-2'>Service Name</th>
                                        <th class='border w-1/6 px-4 py-2'>Package Name</th>
                                        <th class='border w-1/6 px-4 py-2'>Invoice No.</th>
                                        <th class='border w-1/6 px-4 py-2'>Order Date</th>
                                        <th class='border w-1/6 px-4 py-2'>Order Status</th>
                                        <th class='border w-1/6 px-4 py-2'>Actions</th>
                                      </tr>
                                    </thead>
<?php

foreach($orders as $order){
    echo"

                    
                            
                                    <tbody>
                                        <tr>
                                            <td class='border px-4 py-2'>{$order["order_id"]}</td>
                                            <td class='border px-4 py-2'>{$order["first_name"]}</td>
                                            <td class='border px-4 py-2'>{$order["service_name"]}</td>
                                            <td class='border px-4 py-2'>{$order["package_name"]}</td>
                                            <td class='border px-4 py-2'>{$order["invoice_no"]}</td>
                                            <td class='border px-4 py-2'>{$order["order_date"]}</td>
                                            <td class='border px-4 py-2'>{$order["order_status"]}</td>

                                            <td class='border px-4 py-2'>
                                                <a href='../actions/orderAction.php?orderID={$order['order_id']}'class='bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white'>
                                                        <i class='fas fa-edit'></i></a>
                                                
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                
                        
        ";
    }  
?>    
 
</div>
                    </div>      



     </main>
    </div>
                
</body>
</html>
    