<?php

require('../models/paymentModel.php');

function add_payment_controller($id, $cost, $order_id, $currency, $payment_date){
    // create an instance of the Payment class
    $payment_instance = new Payment();
    // call the method from the class
    return $payment_instance->add_payment($id, $cost, $order_id, $currency, $payment_date);

}

function add_order_controller($id, $service_id, $package_id, $invoice_no, $order_date, $order_status){
    $payment_instance = new Payment();
    return $payment_instance->add_order($id, $service_id, $package_id, $invoice_no, $order_date, $order_status);
}

function delete_order_details_controller($order_id){
    $payment_instance = new Payment();
    return $payment_instance->delete_order_details($order_id);
}   

function get_order_controller($id, $invoice_no, $order_date){
    $payment_instance = new Payment();
    return $payment_instance->get_order($id, $invoice_no, $order_date);
}

function get_all_orders_controller(){
    $payment_instance = new Payment();
    return $payment_instance->get_all_orders();
}

function get_user_order_controller($order_id){
    $payment_instance = new Payment();
    return $payment_instance->get_user_order($order_id);
}


function get_user_order_details_controller($order_id){
    $payment_instance = new Payment();
    return $payment_instance->get_user_order_details($order_id);
}

?>