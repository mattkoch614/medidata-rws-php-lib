<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionTriggerType
 *
 * The Trigger element describes a divergence to a new path which can be started at
 * any point during a study participant's path within the referenced structural
 * element.
 * XSD Type: SDMcomplexTypeDefinition-Trigger
 */
class SDMcomplexTypeDefinitionTriggerType
{

    /**
     * Unique identifier for the trigger
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name or description
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Reference to the condition that activates the trigger
     *
     * @property string $conditionOID
     */
    private $conditionOID = null;

    /**
     * The structural element type on which the trigger applies
     *
     * @property string $structuralElementType
     */
    private $structuralElementType = null;

    /**
     * The OID of the structural element on which the trigger applies.
     *  The referenced structural element must be of the type given by the
     * StructuralElementType attribute
     *
     * @property string $structuralElementOID
     */
    private $structuralElementOID = null;

    /**
     * Description of the trigger
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Set of transition destinations for the trigger
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Switch $switch
     */
    private $switch = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the trigger
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
     * Unique identifier for the trigger
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
     * Gets as name
     *
     * Short name or description
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Short name or description
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as conditionOID
     *
     * Reference to the condition that activates the trigger
     *
     * @return string
     */
    public function getConditionOID()
    {
        return $this->conditionOID;
    }

    /**
     * Sets a new conditionOID
     *
     * Reference to the condition that activates the trigger
     *
     * @param string $conditionOID
     * @return self
     */
    public function setConditionOID($conditionOID)
    {
        $this->conditionOID = $conditionOID;
        return $this;
    }

    /**
     * Gets as structuralElementType
     *
     * The structural element type on which the trigger applies
     *
     * @return string
     */
    public function getStructuralElementType()
    {
        return $this->structuralElementType;
    }

    /**
     * Sets a new structuralElementType
     *
     * The structural element type on which the trigger applies
     *
     * @param string $structuralElementType
     * @return self
     */
    public function setStructuralElementType($structuralElementType)
    {
        $this->structuralElementType = $structuralElementType;
        return $this;
    }

    /**
     * Gets as structuralElementOID
     *
     * The OID of the structural element on which the trigger applies.
     *  The referenced structural element must be of the type given by the
     * StructuralElementType attribute
     *
     * @return string
     */
    public function getStructuralElementOID()
    {
        return $this->structuralElementOID;
    }

    /**
     * Sets a new structuralElementOID
     *
     * The OID of the structural element on which the trigger applies.
     *  The referenced structural element must be of the type given by the
     * StructuralElementType attribute
     *
     * @param string $structuralElementOID
     * @return self
     */
    public function setStructuralElementOID($structuralElementOID)
    {
        $this->structuralElementOID = $structuralElementOID;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the trigger
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
     * Description of the trigger
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
     * Gets as switch
     *
     * Set of transition destinations for the trigger
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\Switch
     */
    public function getSwitch()
    {
        return $this->switch;
    }

    /**
     * Sets a new switch
     *
     * Set of transition destinations for the trigger
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Switch $switch
     * @return self
     */
    public function setSwitch(\Medidata\RwsPhp\Schema\StudyDesign\Switch $switch)
    {
        $this->switch = $switch;
        return $this;
    }


}

