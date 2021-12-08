<?php 
require("../models/cartModel.php");

function add_to_cart_controller($service_id, $package_id, $customer_id, $ip_address, $qty){
    $cart_instance = new Cart();
    return $cart_instance->add_to_cart($service_id, $package_id, $customer_id, $ip_address, $qty);
}

function remove_cart_controller($customer_id, $package_id, $service_id){
    $cart_instance = new Cart();
    return $cart_instance->delete_from_cart($customer_id, $package_id, $service_id);
}

function view_cart_controller($ip_add, $customer_id){
    $cart_instance = new Cart();
    return $cart_instance->view_cart($ip_add, $customer_id);
}

function manage_qty_controller($service_id, $customer_id, $ip_add, $qty){
    $cart_instance = new Cart();
    return $cart_instance->manage_qty($service_id, $customer_id, $ip_add, $qty);

}

function checkproduct_controller($service_id, $package_id, $ip_add){
    $cart_instance = new Cart();
    return $cart_instance->checkcart($service_id, $package_id, $ip_add);
}
function total_qty_in_cart_controller(){
    $cart_instance = new Cart();
    return $cart_instance->total_qty_in_cart();
}

?>