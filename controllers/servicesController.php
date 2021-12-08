<?php

require(dirname(__FILE__).'/../models/servicesModel.php');

function add_service_controller( $service_name, $service_description, $service_package, $service_image ){
    // create an instance of the Service class
    $service_instance = new Service();
    // call the method from the class
    return $service_instance->add_service($service_name, $service_description, $service_package, $service_image);

}

function delete_service_controller($id){
    // create an instance of the Service class
    $service_instance = new Service();
    // call the method from the class
    return $service_instance->delete_one_service($id);

}

function update_service_controller($id, $service_name, $service_description, $service_package){
    // create an instance of the Service class
    $service_instance = new Service();
    // call the method from the class
    return $service_instance->update_one_service($id, $service_name, $service_description, $service_package);

}



function select_all_services_controller(){
    // create an instance of the Service class
    $service_instance = new Service();
    // call the method from the class
    return $service_instance->select_all_services();

}

function select_all_premium_services_controller(){
    // create an instance of the Service class
    $service_instance = new Service();
    // call the method from the class
    return $service_instance->select_all_premium_services();

}

function select_all_lite_services_controller(){
    // create an instance of the Service class
    $service_instance = new Service();
    // call the method from the class
    return $service_instance->select_all_lite_services();

}


function subscribe_controller($email){
    $service_instance = new Service();

    return $service_instance->subscribe($email);
}

function get_service_controller($service_id){
    $service_instance = new Service();
    return $service_instance->get_service($service_id);
}



?>