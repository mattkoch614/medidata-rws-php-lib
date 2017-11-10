<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionMeasurementUnitRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-MeasurementUnitRef
 */
class ODMcomplexTypeDefinitionMeasurementUnitRefType
{

    /**
     * @property string $measurementUnitOID
     */
    private $measurementUnitOID = null;

    /**
     * Gets as measurementUnitOID
     *
     * @return string
     */
    public function getMeasurementUnitOID()
    {
        return $this->measurementUnitOID;
    }

    /**
     * Sets a new measurementUnitOID
     *
     * @param string $measurementUnitOID
     * @return self
     */
    public function setMeasurementUnitOID($measurementUnitOID)
    {
        $this->measurementUnitOID = $measurementUnitOID;
        return $this;
    }


}

