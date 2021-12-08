<?php
//like loginprocess.php or registerprocess.php
require('../controllers/servicesController.php');

//delete one service
if(isset($_GET['deleteservice'])){
    $result = delete_service_controller($_GET['deleteservice']);
        //var_dump($result);
        if($result){
            header('Location:../admin/services.php');
        }
        else{
            echo 'error';
        }
  
    
}
?>