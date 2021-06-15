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

            if (dealerValidation::validMake($make)){
                $client->setMake($make);
            }
            else {
                $this->_f3->set('errors[make]', 'Please enter valid make');
            }

            if (dealerValidation::validCategory($category)){
                $client->setCategory($category);
            }
            else {
                $this->_f3->set('errors[category]', 'Please enter valid category');
            }

            if (dealerValidation::validYear($year)){
                $client->setYear($year);
            }
            else {
                $this->_f3->set('errors[year]', 'Please enter valid year');
            }


            if (empty($this->_f3->get('errors'))) {
                $_SESSION['client'] = $client;
            }
        }
        $this->_f3->set('Makes', dealerDataLayer::getMake());
        $this->_f3->set('Categories', dealerDataLayer::getCategory());
        $this->_f3->set('Years', dealerDataLayer::getYear());

        //Display the home page
        $view = new Template();
        echo $view->render('views/services.html');

    }

    public function warrantyClients()
    {
        if ($_SESSION['user'] instanceof WarrantyClient) {
            //Initialize variables to store user input as an array
            $userInterior = array();
            $userExterior = array();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $userInterior = $_POST['indoorInterests'] == null ? array() : $_POST['indoorInterests'];
                $userExterior = $_POST['outdoorInterests'] == null ? array() : $_POST['outdoorInterests'];

                if (Validation::validIndoor($userInterior)) {
                    $_SESSION['user']->setInDoorInterests($userInterior);
                } else {
                    $this->_f3->set('errors["indoor"]', "Please enter a valid interest");
                }

                if (Validation::validOutdoor($userExterior)) {
                    $_SESSION['user']->setOutDoorInterests($userExterior);
                } else {
                    $this->_f3->set('errors["outdoor"]', "Please enter a valid interest");
                }
                if (empty($this->_f3->get('errors'))) {
                    header('location: summary');
                }
            }

            //Get both interest and then send them to the view
            $this->_f3->set('indoor', DataLayer::getIndoors());
            $this->_f3->set('outdoor', DataLayer::getOutdoors());

            //Store the user input in the hive (Part of making the code sticky)
            $this->_f3->set('userInterior', $userInterior);
            $this->_f3->set('userExterior', $userExterior);

            // Display the warranty page
            $view = new Template();
            echo $view->render('views/warrantyClients.html');
        } else {
            header('location: summary');
        }

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