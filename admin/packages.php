<?php
require('../database/core.php');
require('../controllers/packagesController.php');

if(check_login() === false  && check_permission() === false){
    header("Location: ../login/login.php");
}
$packages = view_all_packages_controller();
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
                <!--Grid Form-->
                <aside>
                <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                            Add Package
                        </div>
                        <div class="p-3">
                            <form class="w-full" method='post' action='../actions/updatePackageProcess.php'>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                    for="grid-password">
                                                    Service ID
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                    id="grid-password" type="text" name='serviceID'>
                                            </div>
                                    </div>
                                    
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                for="grid-password">
                                                Package Name
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                id="grid-password" type="text" name='name' >
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                for="grid-password">
                                                Package Price
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                id="grid-password" type="text" name='price' >
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="p-3">
                                                <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full" type="submit" name='addpackage'>
                                                    Add Package
                                                </button>
                                            </div>
                                    </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                </aside>
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
                                        <th class="border w-1/4 px-4 py-2">Service ID</th>
                                        <th class='border w-1/4 px-4 py-2'>Name</th>
                                        <th class='border w-1/6 px-4 py-2'>Price</th>
                                        <th class='border w-1/6 px-4 py-2'>Actions</th>
                                      </tr>
                                    </thead>
<?php

foreach($packages as $package){
    echo"

                    
                            
                                    <tbody>
                                        <tr>
                                            <td class='border px-4 py-2'>{$package["service_id"]}</td>
                                            <td class='border px-4 py-2'>{$package["package_name"]}</td>
                                            <td class='border px-4 py-2'>{$package["package_price"]}</td>
                                            
                                            
                                            <td class='border px-4 py-2'>
                                                <a href='update_package.php?packageID={$package['package_id']}'class='bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white'>
                                                        <i class='fas fa-edit'></i></a>
                                                <a href='update_package.php?deletepackage={$package['package_id']}' class='bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500'>
                                                        <i class='fas fa-trash'></i>
                                                </a>
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
    