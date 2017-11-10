<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionAddressType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Address
 */
class ODMcomplexTypeDefinitionAddressType
{

    /**
     * @property string[] $streetName
     */
    private $streetName = array(
        
    );

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $stateProv
     */
    private $stateProv = null;

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $otherText
     */
    private $otherText = null;

    /**
     * Adds as streetName
     *
     * @return self
     * @param string $streetName
     */
    public function addToStreetName($streetName)
    {
        $this->streetName[] = $streetName;
        return $this;
    }

    /**
     * isset streetName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStreetName($index)
    {
        return isset($this->streetName[$index]);
    }

    /**
     * unset streetName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStreetName($index)
    {
        unset($this->streetName[$index]);
    }

    /**
     * Gets as streetName
     *
     * @return string[]
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets a new streetName
     *
     * @param string $streetName
     * @return self
     */
    public function setStreetName(array $streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as stateProv
     *
     * @return string
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * @param string $stateProv
     * @return self
     */
    public function setStateProv($stateProv)
    {
        $this->stateProv = $stateProv;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as otherText
     *
     * @return string
     */
    public function getOtherText()
    {
        return $this->otherText;
    }

    /**
     * Sets a new otherText
     *
     * @param string $otherText
     * @return self
     */
    public function setOtherText($otherText)
    {
        $this->otherText = $otherText;
        return $this;
    }


}

