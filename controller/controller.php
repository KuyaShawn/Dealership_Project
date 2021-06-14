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
        echo $view->render('views/home.html');
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

    // Admin Page - START
    public function admin()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/admin.html');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);
            $validLogin = false;

            $username = $_POST['userName'];
            $userpass = $_POST['userPass'];

            if(Validation::loginUser($username)){
                $validLogin = true;
            }else{
                $validLogin = false;
                $this->_f3->set('errors["userName"]', "Please input a valid first name");
            }

            if(Validation::loginPass($userpass)){
                $validLogin = true;
            }else{
                $validLogin = false;
                $this->_f3->set('errors["userPass"]', "Please input a valid first name");
            }

            //If there are no errors, redirect to profile route
            if (empty($this->_f3->get('errors')) && $validLogin === true) {
                header('location: admin');
            }
        }

        //Display the home page
        $view = new Template();
        echo $view->render('views/admin_login.html');
    }

    public function logout()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/logout.php');
    }
    // Admin Page - END
}