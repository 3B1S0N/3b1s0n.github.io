<?php

require("../controllers/servicesController.php");

if(isset($_POST['addservice'])){
    $service_name = $_POST['name'];
    $service_desc = $_POST['description'];
    $service_image = $_FILES['image']['name'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"../assets/images/".$service_image);
    $service_package = $_POST["package"];
    
    
    
    $result = add_service_controller($service_name, $service_desc, $service_image, $service_package);
    
    if($result === true) header("Location: ../admin/services.php");
    else echo "insertion failed";
    
}


?>