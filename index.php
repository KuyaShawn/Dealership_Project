<?php

//Turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Define default route
$f3->route('GET /', function(){

    //Display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /', function(){

    //If the form has been submitted, add the data to session
    //and send the user to the next order form
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    }

    //Display the first order form
    $view = new Template();
    echo $view->render('views/');
});

$f3->route('GET /summary', function(){

    //Display the second order form
    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run Fat-Free
$f3->run();