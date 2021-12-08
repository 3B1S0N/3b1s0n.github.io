<?php
require("../database/connection.php");

class Package extends Connection{
    function addPackage($service_id,$name, $price){
        return $this->query("INSERT INTO package(service_id, package_name, package_price) 
                                                    values ('$service_id', '$name', '$price')");
    }

    function editPackage($id, $service_id,$name, $price) {
        return $this->query("UPDATE package
                            SET service_id = '$service_id', package_name='$name', package_price='$price'
                            WHERE package_id = '$id'");
    }

    function deletePackage($id){
        return $this->query("DELETE FROM package WHERE package_id = '$id'");
    }

    function get_all_service_Packages($service_id){
        return $this->fetchOne("select * from package where service_id='$service_id'");
    }

    function get_basic_Packages($service_id){
        return $this->fetchOne("select * from package where service_id='$service_id' and package_name='Basic'");
    }

    function get_premium_Packages($service_id){
        return $this->fetchOne("select * from package where service_id='$service_id' and package_name='Premium'");
    }

    function get_all_Packages(){
        return $this->fetch("SELECT * FROM package");
    }

    function get_service_name($service_id){
        return $this->fetchOne("select service_name from services where service_id='$service_id'");
    }

    function get_package($packageID){
        return $this->fetchOne("SELECT * FROM package where package_id = '$packageID'");
    }
    
}