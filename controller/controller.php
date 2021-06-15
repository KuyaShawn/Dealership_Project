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

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $pNum = $_POST['pNum'];
            $email = $_POST['email'];
            $make = $_POST['make'];
            $model = $_POST['model'];
            $category = $_POST['category'];
            $year = $_POST['year'];
            $miles = $_POST['miles'];

            //looks at the mileage to determine if the client is still under warranty
            if (dealerValidation::validWarranty($miles)){
                $client = new WarrantyClient();
            }
            else{
                $client = new normalClient();
            }

            //validate first name
            if (dealerValidation::validName($fName)){
                $client->setFName($fName);
            }
            else {
                $this->_f3->set('errors[fname]', 'Please enter a valid First Name');
            }

            //validate the last name
            if (dealerValidation::validName($lName)){
                $client->setFName($lName);
            }
            else {
                $this->_f3->set('errors[lname]', 'Please enter a valid Last Name');
            }

            //validate the phone number
            if (dealerValidation::validPhone($pNum)){
                $client->setPNum($pNum);
            }
            else {
                $this->_f3->set('errors[pNum]', 'Please enter a valid phone number');
            }

            //validate the email
            if (dealerValidation::validEmail($email)){
                $client->setEmail($email);
            }
            else {
                $this->_f3->set('errors[email]', 'Please enter a valid email');
            }

            if (dealerValidation::validModel($model)){
                $client->setModel($model);
            }
            else {
                $this->_f3->set('errors[model]', 'Please enter a valid model');
            }

            if (dealerValidation::validMiles($miles)){
                $client->setMiles($miles);
            }
            else {
                $this->_f3->set('errors[miles]', 'Please enter valid miles');
            }

            $client->setMake($make);
            $client->setCategory($category);
            $client->setYear($year);


            if (empty($this->_f3->get('errors'))) {
                $_SESSION['client'] = $client;
            }

        }
        //Display the home page
        $view = new Template();
        echo $view->render('views/services.html');

    }

    public function summary()
    {
        //Display the home page
        $view = new Template();
        echo $view->render('views/summary.html');
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

            if(dealerValidation::loginUser($username)){
                $validLogin = true;
            }else{
                $validLogin = false;
                $this->_f3->set('errors["userName"]', "Please input a valid first name");
            }

            if(dealerValidation::loginPass($userpass)){
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