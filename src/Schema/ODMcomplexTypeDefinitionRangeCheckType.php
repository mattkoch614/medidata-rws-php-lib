<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionRangeCheckType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-RangeCheck
 */
class ODMcomplexTypeDefinitionRangeCheckType
{

    /**
     * @property string $comparator
     */
    private $comparator = null;

    /**
     * @property string $softHard
     */
    private $softHard = null;

    /**
     * @property string[] $checkValue
     */
    private $checkValue = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\FormalExpression[] $formalExpression
     */
    private $formalExpression = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef $measurementUnitRef
     */
    private $measurementUnitRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ErrorMessage $errorMessage
     */
    private $errorMessage = null;

    /**
     * Gets as comparator
     *
     * @return string
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Sets a new comparator
     *
     * @param string $comparator
     * @return self
     */
    public function setComparator($comparator)
    {
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * Gets as softHard
     *
     * @return string
     */
    public function getSoftHard()
    {
        return $this->softHard;
    }

    /**
     * Sets a new softHard
     *
     * @param string $softHard
     * @return self
     */
    public function setSoftHard($softHard)
    {
        $this->softHard = $softHard;
        return $this;
    }

    /**
     * Adds as checkValue
     *
     * @return self
     * @param string $checkValue
     */
    public function addToCheckValue($checkValue)
    {
        $this->checkValue[] = $checkValue;
        return $this;
    }

    /**
     * isset checkValue
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCheckValue($index)
    {
        return isset($this->checkValue[$index]);
    }

    /**
     * unset checkValue
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCheckValue($index)
    {
        unset($this->checkValue[$index]);
    }

    /**
     * Gets as checkValue
     *
     * @return string[]
     */
    public function getCheckValue()
    {
        return $this->checkValue;
    }

    /**
     * Sets a new checkValue
     *
     * @param string $checkValue
     * @return self
     */
    public function setCheckValue(array $checkValue)
    {
        $this->checkValue = $checkValue;
        return $this;
    }

    /**
     * Adds as formalExpression
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\FormalExpression $formalExpression
     */
    public function addToFormalExpression(\Medidata\RwsPhp\Schema\ODM\FormalExpression $formalExpression)
    {
        $this->formalExpression[] = $formalExpression;
        return $this;
    }

    /**
     * isset formalExpression
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormalExpression($index)
    {
        return isset($this->formalExpression[$index]);
    }

    /**
     * unset formalExpression
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormalExpression($index)
    {
        unset($this->formalExpression[$index]);
    }

    /**
     * Gets as formalExpression
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FormalExpression[]
     */
    public function getFormalExpression()
    {
        return $this->formalExpression;
    }

    /**
     * Sets a new formalExpression
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FormalExpression[] $formalExpression
     * @return self
     */
    public function setFormalExpression(array $formalExpression)
    {
        $this->formalExpression = $formalExpression;
        return $this;
    }

    /**
     * Gets as measurementUnitRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef
     */
    public function getMeasurementUnitRef()
    {
        return $this->measurementUnitRef;
    }

    /**
     * Sets a new measurementUnitRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef $measurementUnitRef
     * @return self
     */
    public function setMeasurementUnitRef(\Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef $measurementUnitRef)
    {
        $this->measurementUnitRef = $measurementUnitRef;
        return $this;
    }

    /**
     * Gets as errorMessage
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ErrorMessage
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ErrorMessage $errorMessage
     * @return self
     */
    public function setErrorMessage(\Medidata\RwsPhp\Schema\ODM\ErrorMessage $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }


}

