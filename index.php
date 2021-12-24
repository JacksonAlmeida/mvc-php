<?php

include __DIR__ . '/vendor/autoload.php';

use \App\Controller\Pages\Home;
use App\http\Response;

$response = new Response(200, 'olá mundo');
$response->sendResponse();
echo Home::getHome();
