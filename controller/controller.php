<?php

class dealerController
{
    private $_f3;

    public function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    public function home()
    {
        // Display the home page
        $view = new Template();
        echo $view -> render('views/home.html');
    }

    public function inventory()
    {
        // Inventory page
        $view = new Template();
        echo $view->render('views/inventory.html');
    }

    public function services()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/services.html');
    }

    public function parts()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/parts.html');
    }

    public function admin()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/admin.html');
    }

    public function login()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/admin_login.html');
    }
}