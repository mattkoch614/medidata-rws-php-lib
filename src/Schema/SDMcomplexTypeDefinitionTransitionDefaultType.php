<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionTransitionDefaultType
 *
 *
 * XSD Type: SDMcomplexTypeDefinition-TransitionDefault
 */
class SDMcomplexTypeDefinitionTransitionDefaultType
{

    /**
     * Unique identifier for the default transition
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
     * OID of the activity to which the default transition leads
     *
     * @property string $targetActivityOID
     */
    private $targetActivityOID = null;

    /**
     * Description of the default transition
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the default transition
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
     * Unique identifier for the default transition
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
     * Gets as targetActivityOID
     *
     * OID of the activity to which the default transition leads
     *
     * @return string
     */
    public function getTargetActivityOID()
    {
        return $this->targetActivityOID;
    }

    /**
     * Sets a new targetActivityOID
     *
     * OID of the activity to which the default transition leads
     *
     * @param string $targetActivityOID
     * @return self
     */
    public function setTargetActivityOID($targetActivityOID)
    {
        $this->targetActivityOID = $targetActivityOID;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the default transition
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
     * Description of the default transition
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

