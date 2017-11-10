<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionItemDataIntervalDatetimeType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ItemDataIntervalDatetime
 */
class ODMcomplexTypeDefinitionItemDataIntervalDatetimeType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $itemOID
     */
    private $itemOID = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property string $auditRecordID
     */
    private $auditRecordID = null;

    /**
     * @property string $signatureID
     */
    private $signatureID = null;

    /**
     * @property string $annotationID
     */
    private $annotationID = null;

    /**
     * @property string $measurementUnitOID
     */
    private $measurementUnitOID = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

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
     * Gets as auditRecordID
     *
     * @return string
     */
    public function getAuditRecordID()
    {
        return $this->auditRecordID;
    }

    /**
     * Sets a new auditRecordID
     *
     * @param string $auditRecordID
     * @return self
     */
    public function setAuditRecordID($auditRecordID)
    {
        $this->auditRecordID = $auditRecordID;
        return $this;
    }

    /**
     * Gets as signatureID
     *
     * @return string
     */
    public function getSignatureID()
    {
        return $this->signatureID;
    }

    /**
     * Sets a new signatureID
     *
     * @param string $signatureID
     * @return self
     */
    public function setSignatureID($signatureID)
    {
        $this->signatureID = $signatureID;
        return $this;
    }

    /**
     * Gets as annotationID
     *
     * @return string
     */
    public function getAnnotationID()
    {
        return $this->annotationID;
    }

    /**
     * Sets a new annotationID
     *
     * @param string $annotationID
     * @return self
     */
    public function setAnnotationID($annotationID)
    {
        $this->annotationID = $annotationID;
        return $this;
    }

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

