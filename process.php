<?php 

require_once("vendor/autoload.php");

 // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_zUaUas2GeMztadv4moxNbEnv");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
  "amount" => 1,
  "currency" => "usd",
  "description" => "Example charge",
  "statement_descriptor" => "Custom descriptor",
  "source" => $token,
));
?>