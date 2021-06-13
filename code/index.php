<?php
require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->get('https://uselessfacts.jsph.pl/random.json');
//echo $res->getStatusCode();           
//echo $res->getHeader('content-type'); 
$json = $res->getBody(); 
$result = json_decode($json);

$obj = (object) [
    'LambdaValue' => 'This Comes from Lambda',
    'httpResult' => $result
];

echo json_encode($obj);