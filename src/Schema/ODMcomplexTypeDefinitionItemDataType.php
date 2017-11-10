<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionItemDataType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ItemData
 */
class ODMcomplexTypeDefinitionItemDataType
{

    /**
     * @property string $itemOID
     */
    private $itemOID = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property string $isNull
     */
    private $isNull = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     */
    private $auditRecord = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Signature $signature
     */
    private $signature = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef $measurementUnitRef
     */
    private $measurementUnitRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     */
    private $annotation = array(
        
    );

    /**
     * Gets as itemOID
     *
     * @return string
     */
    public function getItemOID()
    {
        return $this->itemOID;
    }

    /**
     * Sets a new itemOID
     *
     * @param string $itemOID
     * @return self
     */
    public function setItemOID($itemOID)
    {
        $this->itemOID = $itemOID;
        return $this;
    }

    /**
     * Gets as transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Sets a new transactionType
     *
     * @param string $transactionType
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * Gets as isNull
     *
     * @return string
     */
    public function getIsNull()
    {
        return $this->isNull;
    }

    /**
     * Sets a new isNull
     *
     * @param string $isNull
     * @return self
     */
    public function setIsNull($isNull)
    {
        $this->isNull = $isNull;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as auditRecord
     *
     * @return \Medidata\RwsPhp\Schema\ODM\AuditRecord
     */
    public function getAuditRecord()
    {
        return $this->auditRecord;
    }

    /**
     * Sets a new auditRecord
     *
     * @param \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     * @return self
     */
    public function setAuditRecord(\Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord)
    {
        $this->auditRecord = $auditRecord;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Signature $signature
     * @return self
     */
    public function setSignature(\Medidata\RwsPhp\Schema\ODM\Signature $signature)
    {
        $this->signature = $signature;
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
     * Adds as annotation
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation $annotation
     */
    public function addToAnnotation(\Medidata\RwsPhp\Schema\ODM\Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }


}

