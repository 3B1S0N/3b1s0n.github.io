<?php
require("../database/core.php");
check_login();
require("../controllers/paymentController.php");


$result = get_user_order_controller($_GET['order_id']);
//var_dump($_SESSION['user_id']);
$_SESSION['order_id'] = $_GET['order_id'];
//echo $_SESSION['errors'];
// $_SESSION['cost'] = $result['package_price'];
$cost = $_GET['amount'];



?>
<html>
<html lang="en">
  <head>
    <title>Go Inside Fitness</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../PaymentAssets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../PaymentAssets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../PaymentAssets/css/magnific-popup.css">

    <link rel="stylesheet" href="../PaymentAssets/css/flaticon.css">
    <link rel="stylesheet" href="../PaymentAssets/css/style.css">
  </head>
  <body>
  <h2 class="heading">Payment Details</h2>

  <div class="col-md-3 py-md-5 py-4 pl-lg-5" style="background-color: #722F37;">
    <form id="paymentForm">

    <div class="form-group">
      <label for="email" class="label" style="color: white;">Email Address</label>
      <input type="email" class="form-control" name="email" value="<?php echo $result['customer_email']  ?>" id="email-address" readonly/>
    </div>

    <div class="form-group">
      <label for="amount" style="color: white;">Amount</label>
      <!-- <input type="tel" class="form-control" name="amount" value="<?php echo $result['package_price']?>"  id="amount" readonly/> -->
      <input type="tel" class="form-control" name="amount" value="<?php echo $cost?>"  id="amount" readonly/>
    </div>
    <div>
      <input type="hidden" name="order_id" value="<?php echo $_GET['order_id']?>">
    </div>
    <div class="form-group">
      <label for="" style="color: white;">Service Name</label>
      <input type="text" class="form-control" name="service_name" id="invoice_no" value="<?php echo $result['service_name'] ?>" readonly/>
    </div>
    <div class="form-group">
      <label for="" style="color: white;">Package Type</label>
      <input type="text" class="form-control" name="package_name" id="package_no" value="<?php echo $result['package_name'] ?>" readonly/>
    </div>
    <div class="form-group">
      <label for="Invoice style="color: white;"">Invoice No.</label>
      <input type="text" class="form-control" name="service_name" id="invoice_no" value="<?php echo $result['invoice_no'] ?>" readonly/>
    </div class="form-group">
    <label for="" style="color: white;">Are you sure this is what you want to pay for?</label>
    <input type="checkbox" class="" id="consent" name="consent" value="" required>

    <div class="form-submit">
      <button type="submit" class="btn btn-dark submit px-3" onclick="payWithPaystack()"> Pay </button>
    </div>

    </form>
  </div>
  

<script src="https://js.paystack.co/v1/inline.js"></script>

<script> 

    var paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener('submit', payWithPaystack, false);

    function payWithPaystack(e) {
        e.preventDefault()
    var handler = PaystackPop.setup({
        key: 'pk_test_3041fa187dab19f7bd1c71f38cd1d328cb5531b7', 
        email: document.getElementById('email-address').value,
        amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
        currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
        callback: function(response) {
            console.log(response);
        //this happens after the payment is completed successfully
        var reference = response.reference;
        var invoice = response.trxref;
        
        // Make an AJAX call to your server with the reference to verify the transaction
        window.location = `../actions/paymentAction.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value * 100}&reference=${response.reference}`
        },
        onClose: function() {
        alert('Transaction was not completed, window closed.');
        },
    });
    handler.openIframe();
    }

</script> 

<script src="..PaymentAssets/js/jquery.min.js"></script>
  <script src="../PaymentAssets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../PaymentAssets/js/popper.min.js"></script>
  <script src="../PaymentAssets/js/bootstrap.min.js"></script>
  <script src="../PaymentAssets/js/jquery.easing.1.3.js"></script>
  <script src="../PaymentAssets/js/jquery.waypoints.min.js"></script>
  <script src="../PaymentAssets/js/jquery.stellar.min.js"></script>
  <script src="../PaymentAssets/js/jquery.animateNumber.min.js"></script>
  <script src="../PaymentAssets/js/owl.carousel.min.js"></script>
  <script src="../PaymentAssets/js/jquery.magnific-popup.min.js"></script>
  <script src="../PaymentAssets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="..PaymentAssets/js/google-map.js"></script>
  <script src="..PaymentAssets/js/main.js"></script>
  </body>

</html>