<?php

require(dirname(__FILE__).'/../database/connection.php');

// inherit the methods from Connection
class Service extends Connection{


	function add_service( $service_name, $service_description, $service_image, $service_package){
		// return true or false
		return $this->query("INSERT INTO services(service_name, service_desc, service_package, service_image) values('$service_name','$service_description', '$service_package', '$service_image')");
	}

	function delete_one_service($id){
		// return true or false
		return $this->query("DELETE FROM services WHERE service_id = '$id'");
	}

	function update_one_service($id, $service_name, $service_description, $service_package){
		// return true or false
		return $this->query("UPDATE services 
							set service_name='$service_name', service_desc='$service_description', service_package='$service_package' 
							where service_id = '$id'");
	}

	function select_all_services(){
		// return array or false
		// return $this->fetch("SELECT service_id, service_name, service_desc, services_image FROM services");
		return $this->fetch("SELECT * FROM services");
	}

	function select_all_premium_services(){
		// return array or false
		// return $this->fetch("SELECT service_id, service_name, service_desc, services_image FROM services");
		return $this->fetch("SELECT * FROM services WHERE service_package = 'premium'");
	}

	function select_all_lite_services(){
		// return array or false
		// return $this->fetch("SELECT service_id, service_name, service_desc, services_image FROM services");
		return $this->fetch("SELECT * FROM services WHERE service_package = 'lite'");
	}


	function subscribe($email){
		return $this->query("INSERT INTO mailinglist(email) value ('$email')");
	}

	function get_service($service_id){
		return $this->fetchOne("SELECT * FROM services where service_id = '$service_id'");
	}

}

?>