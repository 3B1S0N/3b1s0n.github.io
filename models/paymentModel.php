<?php

require('../database/connection.php');

// inherit the methods from Connection
class Payment extends Connection{


	function add_payment($id, $cost, $order_id, $currency, $payment_date){
		// return true or false
		return $this->query("insert into payment(customer_id, cost, order_id, currency, payment_date) values('$id', '$cost', '$order_id', '$currency', '$payment_date')");
	}

	function view_all_payment(){
		return $this->fetch("SELECT * FROM payment");
	} 

	function add_order($id, $service_id, $package_id, $invoice_no, $order_date, $order_status){
		return $this->query("INSERT INTO orders(customer_id, service_id, package_id, invoice_no, order_date, order_status) values
							('$id', '$service_id','$package_id','$invoice_no','$order_date','$order_status')");
	}

	function delete_order_details($order_id){
		return $this->query("DELETE FROM orders WHERE order_id = '$order_id' )");
	}
	

	function get_order($id, $invoice_no, $order_date){
		return $this->fetchOne("SELECT order_id from orders where customer_id = '$id' and invoice_no = '$invoice_no' and order_date ='$order_date' ");
	}

	function get_user_order($order_id){
		return $this->fetchOne("SELECT service_name, package_name, invoice_no, customer_email, package_price
								FROM orders
								INNER JOIN package 
								ON orders.package_id = package.package_id
								INNER JOIN services
								ON orders.service_id = services.service_id
								INNER JOIN customer
								ON orders.customer_id = customer.customer_id
								WHERE order_id = '$order_id'");
	}

	function get_user_order_details($order_id){
		return $this->fetchOne("SELECT service_id, package_id from orders where order_id = '$order_id'");
	}

	function get_all_orders(){
		return $this->fetch("SELECT order_id, first_name, last_name, order_date, invoice_no, order_status, package_name, service_name
							FROM orders
							INNER JOIN package
							ON orders.package_id = package.package_id
							INNER JOIN services
							ON orders.service_id = services.service_id
							INNER JOIN customer
							ON orders.customer_id = customer.customer_id");
	}

	function change_status($order_id, $status){
		return $this->query("UPDATE orders 
							SET order_status = '$status'
							WHERE order_id = '$order_id'");
	}

	function user_payment_details(){

	}

}

?>