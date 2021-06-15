<?php

class WarrantyClient extends Client
{
    private $_interiorAdditions;
    private $_exteriorAdditions;

    /**
     * WarrantyClient constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->_interiorAdditions = array();
        $this->_exteriorAdditions = array();
    }

    /**
     * @return mixed
     */
    public function getInteriorAdditions(): array
    {
        return $this->_interiorAdditions;
    }

    /**
     * @param mixed $interiorAdditions
     */
    public function setInteriorAdditions($interiorAdditions): void
    {
        $this->_interiorAdditions = $interiorAdditions;
    }

    /**
     * @return mixed
     */
    public function getExteriorAdditions(): array
    {
        return $this->_exteriorAdditions;
    }

    /**
     * @param mixed $exteriorAdditions
     */
    public function setExteriorAdditions($exteriorAdditions): void
    {
        $this->_exteriorAdditions = $exteriorAdditions;
    }


}