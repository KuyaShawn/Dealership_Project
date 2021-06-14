<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//start the session
session_start();

//Instantiate Fat-Free
$f3 = Base::instance();
$controller = new dealerController($f3);

//Home page
$f3->route('GET /', function(){
    $GLOBALS['controller']->home();
});

// Inventory page
$f3->route('GET /inventory', function(){
    $GLOBALS['controller']->inventory();
});

// Service page
$f3->route('GET /services', function(){
    $GLOBALS['controller']->services();
});

// parts page
$f3->route('GET /parts', function(){
    $GLOBALS['controller']->parts();
});

// Admin page
$f3->route('GET /admin', function(){
    $GLOBALS['controller']->admin();
});

// Admin login page
$f3->route('GET /admin_login', function(){
    $GLOBALS['controller']->login();
});

//Run Fat-Free
$f3->run();