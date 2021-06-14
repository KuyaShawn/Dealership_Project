<?php

class Client
{
    private $_fName;
    private $_lName;
    private $_pNum;
    private $_email;
    private $_make;
    private $_model;
    private $_category;
    private $_year;
    private $_miles;
    private $_day;
    private $_time;

    /**
     * Clients constructor.
     * @param $_fName
     * @param $_lName
     * @param $_pNum
     * @param $_email
     * @param $_make
     * @param $_model
     * @param $_year
     * @param $_miles
     * @param $_category
     * @param $_day
     * @param $_time
     */
    public function __construct($_fName = "", $_lName = "", $_pNum = "", $_email = "",
                                $_make = array(), $_model = "", $_year = array(),
                                $_miles = 0, $_day= "", $_time = "", $_category = array())
    {
        $this->_fName = $_fName;
        $this->_lName = $_lName;
        $this->_pNum = $_pNum;
        $this->_email = $_email;
        $this->_make = $_make;
        $this->_model = $_model;
        $this->_year = $_year;
        $this->_miles = $_miles;
        $this->_day = $_day;
        $this->_time = $_time;
        $this->_category = $_category;
    }

    /**
     * @return mixed|string
     */
    public function getFName(): string
    {
        return $this->_fName;
    }

    /**
     * @param mixed|string $fName
     */
    public function setFName($fName): void
    {
        $this->_fName = $fName;
    }

    /**
     * @return mixed|string
     */
    public function getLName(): string
    {
        return $this->_lName;
    }

    /**
     * @param mixed|string $lName
     */
    public function setLName($lName): void
    {
        $this->_lName = $lName;
    }

    /**
     * @return mixed|string
     */
    public function getPNum(): string
    {
        return $this->_pNum;
    }

    /**
     * @param mixed|string $pNum
     */
    public function setPNum($pNum): void
    {
        $this->_pNum = $pNum;
    }

    /**
     * @return mixed|string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param mixed|string $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * @return mixed|string
     */
    public function getMake(): array
    {
        return $this->_make;
    }

    /**
     * @param mixed|string $make
     */
    public function setMake($make): void
    {
        $this->_make = $make;
    }

    /**
     * @return mixed|string
     */
    public function getModel(): string
    {
        return $this->_model;
    }

    /**
     * @param mixed|string $model
     */
    public function setModel($model): void
    {
        $this->_model = $model;
    }

    /**
     * @return int|mixed
     */
    public function getYear(): array
    {
        return $this->_year;
    }

    /**
     * @param int|mixed $year
     */
    public function setYear($year): void
    {
        $this->_year = $year;
    }

    /**
     * @return int|mixed
     */
    public function getMiles(): int
    {
        return $this->_miles;
    }

    /**
     * @param int|mixed $miles
     */
    public function setMiles($miles): void
    {
        $this->_miles = $miles;
    }

    /**
     * @return mixed
     */
    public function getDay(): string
    {
        return $this->_day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day): void
    {
        $this->_day = $day;
    }

    /**
     * @return mixed
     */
    public function getTime(): string
    {
        return $this->_time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->_time = $time;
    }

    /**
     * @return mixed|string
     */
    public function getCategory(): array
    {
        return $this->_category;
    }

    /**
     * @param mixed|string $category
     */
    public function setCategory($category): void
    {
        $this->_category = $category;
    }



}