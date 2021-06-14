<?php

class Client
{
    private $_fName;
    private $_lName;
    private $_pNum;
    private $_make;
    private $_model;
    private $_year;
    private $_miles;

    /**
     * Clients constructor.
     * @param $_fName
     * @param $_lName
     * @param $_pNum
     * @param $_make
     * @param $_model
     * @param $_year
     * @param $_miles
     */
    public function __construct($_fName = "", $_lName = "", $_pNum = "",
                                $_make = "", $_model = "", $_year = 0, $_miles = 0)
    {
        $this->_fName = $_fName;
        $this->_lName = $_lName;
        $this->_pNum = $_pNum;
        $this->_make = $_make;
        $this->_model = $_model;
        $this->_year = $_year;
        $this->_miles = $_miles;
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
    public function getMake(): string
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
    public function getYear(): int
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


}