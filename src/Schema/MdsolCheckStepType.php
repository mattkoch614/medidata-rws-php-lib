<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCheckStepType
 *
 *
 * XSD Type: mdsol-CheckStep
 */
class MdsolCheckStepType
{

    /**
     * @property string $variableOID
     */
    private $variableOID = null;

    /**
     * @property string $dataFormat
     */
    private $dataFormat = null;

    /**
     * @property string $folderOID
     */
    private $folderOID = null;

    /**
     * @property string $formOID
     */
    private $formOID = null;

    /**
     * @property string $fieldOID
     */
    private $fieldOID = null;

    /**
     * @property string $staticValue
     */
    private $staticValue = null;

    /**
     * @property string $function
     */
    private $function = null;

    /**
     * @property string $customFunction
     */
    private $customFunction = null;

    /**
     * @property integer $recordPosition
     */
    private $recordPosition = null;

    /**
     * @property string $logicalRecordPosition
     */
    private $logicalRecordPosition = null;

    /**
     * @property integer $formRepeatNumber
     */
    private $formRepeatNumber = null;

    /**
     * @property integer $folderRepeatNumber
     */
    private $folderRepeatNumber = null;

    /**
     * Gets as variableOID
     *
     * @return string
     */
    public function getVariableOID()
    {
        return $this->variableOID;
    }

    /**
     * Sets a new variableOID
     *
     * @param string $variableOID
     * @return self
     */
    public function setVariableOID($variableOID)
    {
        $this->variableOID = $variableOID;
        return $this;
    }

    /**
     * Gets as dataFormat
     *
     * @return string
     */
    public function getDataFormat()
    {
        return $this->dataFormat;
    }

    /**
     * Sets a new dataFormat
     *
     * @param string $dataFormat
     * @return self
     */
    public function setDataFormat($dataFormat)
    {
        $this->dataFormat = $dataFormat;
        return $this;
    }

    /**
     * Gets as folderOID
     *
     * @return string
     */
    public function getFolderOID()
    {
        return $this->folderOID;
    }

    /**
     * Sets a new folderOID
     *
     * @param string $folderOID
     * @return self
     */
    public function setFolderOID($folderOID)
    {
        $this->folderOID = $folderOID;
        return $this;
    }

    /**
     * Gets as formOID
     *
     * @return string
     */
    public function getFormOID()
    {
        return $this->formOID;
    }

    /**
     * Sets a new formOID
     *
     * @param string $formOID
     * @return self
     */
    public function setFormOID($formOID)
    {
        $this->formOID = $formOID;
        return $this;
    }

    /**
     * Gets as fieldOID
     *
     * @return string
     */
    public function getFieldOID()
    {
        return $this->fieldOID;
    }

    /**
     * Sets a new fieldOID
     *
     * @param string $fieldOID
     * @return self
     */
    public function setFieldOID($fieldOID)
    {
        $this->fieldOID = $fieldOID;
        return $this;
    }

    /**
     * Gets as staticValue
     *
     * @return string
     */
    public function getStaticValue()
    {
        return $this->staticValue;
    }

    /**
     * Sets a new staticValue
     *
     * @param string $staticValue
     * @return self
     */
    public function setStaticValue($staticValue)
    {
        $this->staticValue = $staticValue;
        return $this;
    }

    /**
     * Gets as function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * @param string $function
     * @return self
     */
    public function setFunction($function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as customFunction
     *
     * @return string
     */
    public function getCustomFunction()
    {
        return $this->customFunction;
    }

    /**
     * Sets a new customFunction
     *
     * @param string $customFunction
     * @return self
     */
    public function setCustomFunction($customFunction)
    {
        $this->customFunction = $customFunction;
        return $this;
    }

    /**
     * Gets as recordPosition
     *
     * @return integer
     */
    public function getRecordPosition()
    {
        return $this->recordPosition;
    }

    /**
     * Sets a new recordPosition
     *
     * @param integer $recordPosition
     * @return self
     */
    public function setRecordPosition($recordPosition)
    {
        $this->recordPosition = $recordPosition;
        return $this;
    }

    /**
     * Gets as logicalRecordPosition
     *
     * @return string
     */
    public function getLogicalRecordPosition()
    {
        return $this->logicalRecordPosition;
    }

    /**
     * Sets a new logicalRecordPosition
     *
     * @param string $logicalRecordPosition
     * @return self
     */
    public function setLogicalRecordPosition($logicalRecordPosition)
    {
        $this->logicalRecordPosition = $logicalRecordPosition;
        return $this;
    }

    /**
     * Gets as formRepeatNumber
     *
     * @return integer
     */
    public function getFormRepeatNumber()
    {
        return $this->formRepeatNumber;
    }

    /**
     * Sets a new formRepeatNumber
     *
     * @param integer $formRepeatNumber
     * @return self
     */
    public function setFormRepeatNumber($formRepeatNumber)
    {
        $this->formRepeatNumber = $formRepeatNumber;
        return $this;
    }

    /**
     * Gets as folderRepeatNumber
     *
     * @return integer
     */
    public function getFolderRepeatNumber()
    {
        return $this->folderRepeatNumber;
    }

    /**
     * Sets a new folderRepeatNumber
     *
     * @param integer $folderRepeatNumber
     * @return self
     */
    public function setFolderRepeatNumber($folderRepeatNumber)
    {
        $this->folderRepeatNumber = $folderRepeatNumber;
        return $this;
    }


}

