<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionParameterType
 *
 * Study parameter
 * XSD Type: SDMcomplexTypeDefinition-Parameter
 */
class SDMcomplexTypeDefinitionParameterType
{

    /**
     * Unique identifier for the parameter
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Parameter term
     *
     * @property string $term
     */
    private $term = null;

    /**
     * Parameter short name
     *
     * @property string $shortName
     */
    private $shortName = null;

    /**
     * Parameter description
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Parameter value(s)
     *
     * @property string[] $value
     */
    private $value = array(
        
    );

    /**
     * Gets as oID
     *
     * Unique identifier for the parameter
     *
     * @return string
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * Sets a new oID
     *
     * Unique identifier for the parameter
     *
     * @param string $oID
     * @return self
     */
    public function setOID($oID)
    {
        $this->oID = $oID;
        return $this;
    }

    /**
     * Gets as term
     *
     * Parameter term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * Parameter term
     *
     * @param string $term
     * @return self
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Gets as shortName
     *
     * Parameter short name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * Parameter short name
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Gets as description
     *
     * Parameter description
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Parameter description
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Description $description
     * @return self
     */
    public function setDescription(\Medidata\RwsPhp\Schema\ODM\Description $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as value
     *
     * Parameter value(s)
     *
     * @return self
     * @param string $value
     */
    public function addToValue($value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * Parameter value(s)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * Parameter value(s)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * Parameter value(s)
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Parameter value(s)
     *
     * @param string $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }


}

