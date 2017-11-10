<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionCriterionType
 *
 * Defines a criterion which is to be evaluated at runtime to influence workflow.
 * XSD Type: SDMcomplexTypeDefinition-Criterion
 */
class SDMcomplexTypeDefinitionCriterionType
{

    /**
     * Unique identifier for the criterion
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name for the criterion
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Reference to the a ConditionDef
     *
     * @property string $conditionOID
     */
    private $conditionOID = null;

    /**
     * Criterion description.
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the criterion
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
     * Unique identifier for the criterion
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
     * Short name for the criterion
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
     * Short name for the criterion
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
     * Reference to the a ConditionDef
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
     * Reference to the a ConditionDef
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
     * Gets as description
     *
     * Criterion description.
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
     * Criterion description.
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Description $description
     * @return self
     */
    public function setDescription(\Medidata\RwsPhp\Schema\ODM\Description $description)
    {
        $this->description = $description;
        return $this;
    }


}

