<?php
require_once "../vendor/autoload.php";

use App\Core\Dispatcher;
use App\Core\Request;
use App\Core\RouteCollection;
session_start();
$routes = new RouteCollection();
$request = new Request();
$dispatcher = new Dispatcher($routes, $request);