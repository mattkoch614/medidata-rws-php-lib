<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionSegmentDefType
 *
 * A SegmentDef represents a set of activities. Each segment must be referenced by
 * a cell via a SegmentRef within a CellDef.
 * XSD Type: SDMcomplexTypeDefinition-SegmentDef
 */
class SDMcomplexTypeDefinitionSegmentDefType
{

    /**
     * Unique identifier for the segment
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name for the segment
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Segment description
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * List of references to activities which are contained in the segment.
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef[] $activityRef
     */
    private $activityRef = array(
        
    );

    /**
     * Gets as oID
     *
     * Unique identifier for the segment
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
     * Unique identifier for the segment
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
     * Short name for the segment
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
     * Short name for the segment
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
     * Gets as description
     *
     * Segment description
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
     * Segment description
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
     * Adds as activityRef
     *
     * List of references to activities which are contained in the segment.
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef $activityRef
     */
    public function addToActivityRef(\Medidata\RwsPhp\Schema\StudyDesign\ActivityRef $activityRef)
    {
        $this->activityRef[] = $activityRef;
        return $this;
    }

    /**
     * isset activityRef
     *
     * List of references to activities which are contained in the segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActivityRef($index)
    {
        return isset($this->activityRef[$index]);
    }

    /**
     * unset activityRef
     *
     * List of references to activities which are contained in the segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActivityRef($index)
    {
        unset($this->activityRef[$index]);
    }

    /**
     * Gets as activityRef
     *
     * List of references to activities which are contained in the segment.
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef[]
     */
    public function getActivityRef()
    {
        return $this->activityRef;
    }

    /**
     * Sets a new activityRef
     *
     * List of references to activities which are contained in the segment.
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef[] $activityRef
     * @return self
     */
    public function setActivityRef(array $activityRef)
    {
        $this->activityRef = $activityRef;
        return $this;
    }


}

