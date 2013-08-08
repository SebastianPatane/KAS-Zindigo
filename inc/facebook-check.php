<?php
require 'facebook.php';
$facebook = new Facebook(array(
	'appId' => '500663786683684',
  	'secret' => 'adcf27380132a5fd5e1a5c42d967b826',
));

$theRequest = $facebook->getSignedRequest();

if( $theRequest["page"]["liked"] == 1 || $_GET["valid"]=='ok' ){ $liked = true; } else { $liked = false; }

?>