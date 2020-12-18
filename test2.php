<?php

// SETUP:
// 1. Customize all the settings (stripe api key, email settings, email text)
// 2. Put this code somewhere where it's accessible by a URL on your server.
// 3. Add the URL of that location to the settings at https://manage.stripe.com/#account/webhooks
// 4. Have fun!

// set your secret key: remember to change this to your live secret key in production
// see your keys here https://manage.stripe.com/account
require_once('init.php');
Stripe\Stripe::::setApiKey("sk_test_51HxR8yGjhTcXxGvw5Bfe4FHrdVNqGbK4eABC3PoJuyzjCsWydkNCh1v08Q2HadgaSjLp92AC5yIuK1bd44tTVPeB00ayk8iFiX");

$payload = @file_get_contents('php://input');
print_r($payload);
?>
