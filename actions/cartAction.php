

<?php 
session_start();
require("../controllers/cartController.php");

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





if(isset($_POST['addToCart'])){
    $service_id = $_POST['serviceID'];
    $ip_address = getIPAddress();
    $package_id = 2;
    $qty = $_POST['qty'];
    // $package_id = $_POST['packageID'];
   

    if(isset($_SESSION['user_id'])){
        $customer_id = $_SESSION['user_id'];
        //echo "$customer_id";
        
    }else{
        header("Location: ../login/login.php");
    }
    
    
    $service = checkproduct_controller($service_id, $package_id, $customer_id);
    
    //die;
    if($service){
        $_SESSION['errors'] = 'Product already in cart';
        header("Location: ../views/services.php");
    }
    
   
    
    $result = add_to_cart_controller($service_id, $package_id,  $customer_id,  $ip_address, $qty);
    
    // echo $service_id . "<br>";
    // echo $ip_address . "<br>";
    // echo $customer_id . "<br>";
    // echo $qty . "<br>";
    // echo $package_id . "<br>";
    // var_dump($result);
    

    if($result === true){
        header("Location: ../views/cart.php");
    }
    else{
        echo "Database error";
        die();
    }
}

if(isset($_POST['deleteProductID'])){
    $service_id = $_POST['service_id'];
    $customer_id = $_SESSION['user_id'];
    $package_id= $_POST['package_id'];
    
    // if(!isset($customer_id) || $customer_id === NULL || $customer_id === ""){
    //     $_SESSION['errors'] = "You have to log in to update the cart";
    //     header("Location: ../views/cart.php");
    // }
    echo $service_id;

    $result = remove_cart_controller($customer_id, $package_id, $service_id);

    if($result === true){
        $_SESSION['errors'] = "Deleted";

        // echo $customer_id."<br>";
        // echo $package_id."<br>";
        // echo $service_id."<br>";
        //var_dump($result);
        header("Location: ../views/cart.php");
    }
    else{
        echo "Database error";
        die();
    }
}

if(isset($_POST['change_quantity'])){
    if(isset($_POST['customer_id'])){
        $customer_id = $_POST['customer_id'];
    }
    else{
        $customer_id = null;
    }


    $qty = $_POST['qty'];
    $service_id = $_POST['service_id'];
    $ip_address = getIPAddress();

    $result = manage_qty_controller($service_id, $customer_id, $ip_address, $qty);
    
    if($result === true){
        header("Location: ../views/cart.php");
    }
    else{
        echo "Database error";
        die();
    }
}



  
// else{
//     echo '<script> alert("Kindly Log In before you proceed to cart") 
//     window.location.replace("../login/login.php")</script>';
//     //header("Location: ../login/login.php");
// }

?>
  
    
    
