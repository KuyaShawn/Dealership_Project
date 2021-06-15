<?php

class normalClient
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

    /**
     * Clients constructor.
     */
    public function __construct()
    {
        $this->_fName = "";
        $this->_lName = "";
        $this->_pNum = "";
        $this->_email = "";
        $this->_make = array();
        $this->_model = "";
        $this->_year = array();
        $this->_miles = "";
        $this->_category = array();
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