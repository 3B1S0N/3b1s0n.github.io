<?php 
require("../controllers/packagesController.php");


if(isset($_POST['packageupdate'])){
    $package_id = $_POST['packageID'];
    $service_id = $_POST['serviceID'];
    $price = $_POST['price'];
    $name = $_POST['name'];


    $result = update_package_controller($package_id, $service_id, $name, $price);
    
  

    if($result === true ){
        header("Location: ../admin/packages.php");
    }
    else{
        echo "Database error";
    }

}

if(isset($_POST['addpackage'])){
    $service_id = $_POST['serviceID'];
    $price = $_POST['price'];
    $name = $_POST['name'];

    $result = add_package_controller($service_id, $name, $price);

    


    if($result === true){
        header("Location: ../admin/packages.php");

    }
    else{
        echo "Database error";
    }
}


?>