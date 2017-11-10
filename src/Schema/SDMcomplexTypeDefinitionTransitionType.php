<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionTransitionType
 *
 * The Transition element specifies the set of potential branches that could be
 * followed after completion of a given activity
 * XSD Type: SDMcomplexTypeDefinition-Transition
 */
class SDMcomplexTypeDefinitionTransitionType
{

    /**
     * Unique identifier for the transition
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name or description for the transition
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Reference to the activity from which the transition originates
     *
     * @property string $sourceActivityOID
     */
    private $sourceActivityOID = null;

    /**
     * Description of the transition
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Set of transition destinations
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Switch $switch
     */
    private $switch = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the transition
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
     * Unique identifier for the transition
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
     * Short name or description for the transition
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
     * Short name or description for the transition
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
     * Gets as sourceActivityOID
     *
     * Reference to the activity from which the transition originates
     *
     * @return string
     */
    public function getSourceActivityOID()
    {
        return $this->sourceActivityOID;
    }

    /**
     * Sets a new sourceActivityOID
     *
     * Reference to the activity from which the transition originates
     *
     * @param string $sourceActivityOID
     * @return self
     */
    public function setSourceActivityOID($sourceActivityOID)
    {
        $this->sourceActivityOID = $sourceActivityOID;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the transition
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
     * Description of the transition
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
     * Set of transition destinations
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
     * Set of transition destinations
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

