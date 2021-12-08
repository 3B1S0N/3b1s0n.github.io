<?php 
require('../models/packagesModel.php');

function add_package_controller($service_id,$name, $price){
    $package_instance = new Package();
    return $package_instance->addPackage($service_id,$name, $price);
}

function delete_package_controller($id){
    $package_instance = new Package();
    return $package_instance->deletePackage($id);
}

function update_package_controller($id, $service_id,$name, $price){
    $package_instance = new Package();
    return $package_instance->editPackage($id, $service_id,$name, $price);
}

function view_service_packages_controller($service_id){
    $package_instance = new Package();
    return $package_instance->get_all_service_Packages($service_id);
}

function view_basic_packages_controller($service_id){
    $package_instance = new Package();
    return $package_instance->get_basic_Packages($service_id);
}

function view_premium_packages_controller($service_id){
    $package_instance = new Package();
    return $package_instance->get_premium_Packages($service_id);
}

function view_service_name_controller($service_id){
    $package_instance = new Package();
    return $package_instance->get_service_name($service_id);
}

function get_package_controller($packageID){
    $package_instance = new Package();
    return $package_instance->get_package($packageID);
}

function view_all_packages_controller(){
    $package_instance = new Package();
    return $package_instance->get_all_Packages();
}
?>