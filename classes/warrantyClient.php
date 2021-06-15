<?php

class WarrantyClient extends Client
{
    private $_interiorAdditions;
    private $_exteriorAdditions;

    /**
     * WarrantyClient constructor.
     * @param $_interiorAdditions
     * @param $_exteriorAdditions
     */
    public function __construct($_interiorAdditions = array(), $_exteriorAdditions = array())
    {
        parent::__construct();
        $this->_interiorAdditions = $_interiorAdditions;
        $this->_exteriorAdditions = $_exteriorAdditions;
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