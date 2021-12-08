<?php
    require("../actions/paymentAction.php");

    if(isset($_POST['proceed'])){
        $date = date('Y-m-d');
        $service_id = $_POST['service_id'];
        $package_id = $_POST['package_id'];
        //$date = $_POST['date'];
        $invoice_no = rand(100000,999999);
        $amount = $_POST['amount'];
        if(isset($_SESSION['user_id']))
            $id = $_SESSION['user_id'];
        else 
            $_SESSION['errors'] = "You must be logged in to place an order";
            //header("location: ../views/cart.php");
        $order_status = 'PENDING';

        $make_order = add_order_controller($id,$service_id, $package_id, $invoice_no, $date, $order_status);
        $order_details = get_order_controller($id, $invoice_no, $date);
        $order_id = $order_details['order_id'];

        if($make_order === true){
            $_SESSION['make_order'] = "order made";
            header("Location: ../views/payment.php?order_id=$order_id&amount=$amount");
        }
        else echo "Database error";
    }
?>