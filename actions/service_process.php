<?php
//like loginprocess.php or registerprocess.php
require('../controllers/servicesController.php');


if(isset($_POST['updateservice'])){
    $service_name = $_POST['name'];
    $service_desc = $_POST['description'];
    $service_package = $_POST["package"];
    $id = $_POST['serviceID'];
    
    
    $result = update_service_controller($id, $service_name, $service_desc, $service_package);
    // echo $id."<br>";
    // echo $service_name."<br>";
    // echo $service_desc."<br>";
    // echo $service_package."<br>";

    
    if($result === true) header("Location: ../admin/services.php");
        else echo "insertion failed";
    
}



if(isset($_GET['deleteservice'])){
    echo "something";
    delete_service_controller($_GET['deleteService']);
    header("Location: ../admin/services.php");
}

?>