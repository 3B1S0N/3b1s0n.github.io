<?php
session_start();
require('../controllers/paymentController.php');

// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_test_281009b5abbd75ebc821ca6782fb8fd79f25ea87",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);
// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
    // get form values
    $order_date = date("Y-m-d");
    $currency = "GHS";
    $id = $_SESSION['user_id'];
    $order_id = $_SESSION['order_id'];
    $cost = $_GET['amount']/100;

    
    // echo $order_id;


    $payment = add_payment_controller($id, $cost, $order_id, $currency, $order_date);
    $_SESSION['errors'] = $payment;

    // call controller function to insert into database
    //$result = add_payment_controller();
    $result = get_user_order_details_controller($order_id);

    $_SESSION['service_id'] = $result['service_id'];
    $_SESSION['package_id'] = $result['package_id'];
    // check if insertion was successful
    if($payment) header("Location: ../views/successful.php?");
    else echo "insertion failed";
}else{
    // if verification failed
    echo $response;
}

?>