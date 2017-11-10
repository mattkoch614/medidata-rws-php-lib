<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionBasicDefinitionsType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-BasicDefinitions
 */
class ODMcomplexTypeDefinitionBasicDefinitionsType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\MeasurementUnit[] $measurementUnit
     */
    private $measurementUnit = array(
        
    );

    /**
     * Adds as measurementUnit
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\MeasurementUnit $measurementUnit
     */
    public function addToMeasurementUnit(\Medidata\RwsPhp\Schema\ODM\MeasurementUnit $measurementUnit)
    {
        $this->measurementUnit[] = $measurementUnit;
        return $this;
    }

    /**
     * isset measurementUnit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMeasurementUnit($index)
    {
        return isset($this->measurementUnit[$index]);
    }

    /**
     * unset measurementUnit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMeasurementUnit($index)
    {
        unset($this->measurementUnit[$index]);
    }

    /**
     * Gets as measurementUnit
     *
     * @return \Medidata\RwsPhp\Schema\ODM\MeasurementUnit[]
     */
    public function getMeasurementUnit()
    {
        return $this->measurementUnit;
    }

    /**
     * Sets a new measurementUnit
     *
     * @param \Medidata\RwsPhp\Schema\ODM\MeasurementUnit[] $measurementUnit
     * @return self
     */
    public function setMeasurementUnit(array $measurementUnit)
    {
        $this->measurementUnit = $measurementUnit;
        return $this;
    }


}

