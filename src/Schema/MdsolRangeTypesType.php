<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolRangeTypesType
 *
 *
 * XSD Type: mdsol-RangeTypes
 */
class MdsolRangeTypesType
{

    /**
     * @property string $rangeTypeName
     */
    private $rangeTypeName = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping[]
     * $labVariableMapping
     */
    private $labVariableMapping = array(
        
    );

    /**
     * Gets as rangeTypeName
     *
     * @return string
     */
    public function getRangeTypeName()
    {
        return $this->rangeTypeName;
    }

    /**
     * Sets a new rangeTypeName
     *
     * @param string $rangeTypeName
     * @return self
     */
    public function setRangeTypeName($rangeTypeName)
    {
        $this->rangeTypeName = $rangeTypeName;
        return $this;
    }

    /**
     * Adds as labVariableMapping
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping $labVariableMapping
     */
    public function addToLabVariableMapping(\Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping $labVariableMapping)
    {
        $this->labVariableMapping[] = $labVariableMapping;
        return $this;
    }

    /**
     * isset labVariableMapping
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLabVariableMapping($index)
    {
        return isset($this->labVariableMapping[$index]);
    }

    /**
     * unset labVariableMapping
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLabVariableMapping($index)
    {
        unset($this->labVariableMapping[$index]);
    }

    /**
     * Gets as labVariableMapping
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping[]
     */
    public function getLabVariableMapping()
    {
        return $this->labVariableMapping;
    }

    /**
     * Sets a new labVariableMapping
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping[]
     * $labVariableMapping
     * @return self
     */
    public function setLabVariableMapping(array $labVariableMapping)
    {
        $this->labVariableMapping = $labVariableMapping;
        return $this;
    }


}

