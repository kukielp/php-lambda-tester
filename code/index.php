<?php

require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->get('https://jsonplaceholder.typicode.com/todos/1');
echo $res->getStatusCode();           
echo $res->getHeader('content-type'); 
echo $res->getBody();                
var_export($res->json());    

