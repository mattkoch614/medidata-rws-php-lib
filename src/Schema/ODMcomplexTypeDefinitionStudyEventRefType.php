<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionStudyEventRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-StudyEventRef
 */
class ODMcomplexTypeDefinitionStudyEventRefType
{

    /**
     * @property string $studyEventOID
     */
    private $studyEventOID = null;

    /**
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * @property string $mandatory
     */
    private $mandatory = null;

    /**
     * @property string $collectionExceptionConditionOID
     */
    private $collectionExceptionConditionOID = null;

    /**
     * Gets as studyEventOID
     *
     * @return string
     */
    public function getStudyEventOID()
    {
        return $this->studyEventOID;
    }

    /**
     * Sets a new studyEventOID
     *
     * @param string $studyEventOID
     * @return self
     */
    public function setStudyEventOID($studyEventOID)
    {
        $this->studyEventOID = $studyEventOID;
        return $this;
    }

    /**
     * Gets as orderNumber
     *
     * @return integer
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Sets a new orderNumber
     *
     * @param integer $orderNumber
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * Gets as mandatory
     *
     * @return string
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Sets a new mandatory
     *
     * @param string $mandatory
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
        return $this;
    }

    /**
     * Gets as collectionExceptionConditionOID
     *
     * @return string
     */
    public function getCollectionExceptionConditionOID()
    {
        return $this->collectionExceptionConditionOID;
    }

    /**
     * Sets a new collectionExceptionConditionOID
     *
     * @param string $collectionExceptionConditionOID
     * @return self
     */
    public function setCollectionExceptionConditionOID($collectionExceptionConditionOID)
    {
        $this->collectionExceptionConditionOID = $collectionExceptionConditionOID;
        return $this;
    }


}

