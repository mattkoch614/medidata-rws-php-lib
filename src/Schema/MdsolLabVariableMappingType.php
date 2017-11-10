<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolLabVariableMappingType
 *
 *
 * XSD Type: mdsol-LabVariableMapping
 */
class MdsolLabVariableMappingType
{

    /**
     * @property string $labVariable
     */
    private $labVariable = null;

    /**
     * @property string $studyEventOID
     */
    private $studyEventOID = null;

    /**
     * @property string $formOID
     */
    private $formOID = null;

    /**
     * @property string $itemOID
     */
    private $itemOID = null;

    /**
     * @property string $rangeLocation
     */
    private $rangeLocation = null;

    /**
     * Gets as labVariable
     *
     * @return string
     */
    public function getLabVariable()
    {
        return $this->labVariable;
    }

    /**
     * Sets a new labVariable
     *
     * @param string $labVariable
     * @return self
     */
    public function setLabVariable($labVariable)
    {
        $this->labVariable = $labVariable;
        return $this;
    }

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
     * Gets as rangeLocation
     *
     * @return string
     */
    public function getRangeLocation()
    {
        return $this->rangeLocation;
    }

    /**
     * Sets a new rangeLocation
     *
     * @param string $rangeLocation
     * @return self
     */
    public function setRangeLocation($rangeLocation)
    {
        $this->rangeLocation = $rangeLocation;
        return $this;
    }


}

