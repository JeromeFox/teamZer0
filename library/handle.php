<?php
require 'stripe-php-2.2.0/init.php';

if ($_POST) {
  Stripe\Stripe::setApiKey("sk_test_UYrpaLslRJJDQd0Wk3sDFePZ");
  $error = '';
  $success = '';
  try {
    if (!isset($_POST['stripeToken']))
      throw new Exception("The Stripe Token was not generated correctly");
    Stripe\Charge::create(array("amount" => $_POST['amount'],
                                "currency" => "cad",
                                "card" => $_POST['stripeToken']));
    $success = 'Your payment was successful.';
    header("Location: ../public_html/success.php");
	die();

  }
  catch (\Stripe\Error\Card $e) {
    $error = $e->getMessage();
  }
}

?>
