<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/latihan_web_20245520005-Jonathan-Sutanto/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/latihan_web_20245520005-Jonathan-Sutanto/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/latihan_web_20245520005-Jonathan-Sutanto/bootstrap/app.php';

$app->handleRequest(Request::capture());
