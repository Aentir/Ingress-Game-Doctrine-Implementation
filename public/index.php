<?php
require_once "../vendor/autoload.php";

use App\Core\Dispatcher;
use App\Core\Request;
use App\Core\RouteCollection;

$routes = new RouteCollection();
$request = new Request();
$dispatcher = new Dispatcher($routes, $request);