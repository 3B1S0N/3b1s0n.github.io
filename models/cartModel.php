<?php
require("../database/connection.php");

class Cart extends Connection{
    function add_to_cart($service_id, $package_id, $customer_id, $ip_address, $qty){
        return $this->query("INSERT INTO cart(service_id, package_id, customer_id, ip_address, quantity) 
        values('$service_id','$package_id','$customer_id','$ip_address','$qty')");
    }

    function manage_qty($service_id, $customer_id, $ip_add, $qty){
        return $this->query("UPDATE cart 
                            SET quantity = '$qty' 
                            WHERE service_id= '$service_id' and customer_id = '$customer_id' or ip_address = '$ip_add' ");
    }

    function delete_from_cart($customer_id, $package_id, $service_id){
        return $this->query("DELETE FROM cart WHERE package_id = '$package_id'  and service_id = '$service_id' and customer_id = '$customer_id'");
    }

    function view_cart($ip_add, $customer_id){
        return $this->fetch("SELECT services.service_id, package.package_id, package.package_price, services.service_name, package.package_name, cart.quantity from cart 
                             inner join services on cart.service_id = services.service_id 
                             inner join package on cart.package_id = package.package_id 
                             where ip_address='$ip_add' or customer_id='$customer_id';");
    }

    function checkcart($service_id, $package_id, $customer_id){
        return $this->fetchOne("SELECT * from cart where service_id = '$service_id'  and package_id = '$package_id' and customer_id = '$customer_id'" );
    }
    function total_qty_in_cart(){
		return $this->fetch("select SUM(quantity) from cart");
	}
    
}