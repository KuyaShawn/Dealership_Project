<?php

class WarrantyClient extends Client
{
    private $_wash;
    private $_vacuum;
    private $_buff;

    /**
     * WarrantyClient constructor.
     * @param $_wash
     * @param $_vacuum
     * @param $_buff
     */
    public function __construct($_fName = "", $_lName = "", $_pNum = "",
                                $_make = "", $_model = "", $_year = 0,
                                $_miles = 0, $_wash = "", $_vacuum = "", $_buff = "")
    {
        parent::__construct($_fName, $_lName, $_pNum,
            $_make, $_model, $_year, $_miles);
        $this->_wash = $_wash;
        $this->_vacuum = $_vacuum;
        $this->_buff = $_buff;
    }

    /**
     * @return mixed|string
     */
    public function getWash(): string
    {
        return $this->_wash;
    }

    /**
     * @param mixed|string $wash
     */
    public function setWash($wash): void
    {
        $this->_wash = $wash;
    }

    /**
     * @return mixed|string
     */
    public function getVacuum(): string
    {
        return $this->_vacuum;
    }

    /**
     * @param mixed|string $vacuum
     */
    public function setVacuum($vacuum): void
    {
        $this->_vacuum = $vacuum;
    }

    /**
     * @return mixed|string
     */
    public function getBuff(): string
    {
        return $this->_buff;
    }

    /**
     * @param mixed|string $buff
     */
    public function setBuff($buff): void
    {
        $this->_buff = $buff;
    }


}