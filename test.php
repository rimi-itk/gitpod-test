<?php

require_once __DIR__.'/vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://httpbin.org/');

echo $res->getStatusCode();
