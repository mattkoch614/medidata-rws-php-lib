<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCheckActionType
 *
 *
 * XSD Type: mdsol-CheckAction
 */
class MdsolCheckActionType
{

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
     * @property string $variableOID
     */
    private $variableOID = null;

    /**
     * @property integer $recordPosition
     */
    private $recordPosition = null;

    /**
     * @property integer $formRepeatNumber
     */
    private $formRepeatNumber = null;

    /**
     * @property integer $folderRepeatNumber
     */
    private $folderRepeatNumber = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $string
     */
    private $string = null;

    /**
     * @property string $options
     */
    private $options = null;

    /**
     * @property string $script
     */
    private $script = null;

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

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as string
     *
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Sets a new string
     *
     * @param string $string
     * @return self
     */
    public function setString($string)
    {
        $this->string = $string;
        return $this;
    }

    /**
     * Gets as options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options
     *
     * @param string $options
     * @return self
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Gets as script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Sets a new script
     *
     * @param string $script
     * @return self
     */
    public function setScript($script)
    {
        $this->script = $script;
        return $this;
    }


}

