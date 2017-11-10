<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionStructureType
 *
 * Structure is a container for all SDM structural elements. It is placed inside a
 * ODM Protocol
 *  element in order to extend on ODM file with SDM structural definitions.
 * XSD Type: SDMcomplexTypeDefinition-Structure
 */
class SDMcomplexTypeDefinitionStructureType
{

    /**
     * List of epoch definitions
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Epoch[] $epoch
     */
    private $epoch = array(
        
    );

    /**
     * List of arm definitions
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Arm[] $arm
     */
    private $arm = array(
        
    );

    /**
     * List of cell definitions
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\CellDef[] $cellDef
     */
    private $cellDef = array(
        
    );

    /**
     * List of segment definitions
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\SegmentDef[] $segmentDef
     */
    private $segmentDef = array(
        
    );

    /**
     * List of activity definitions
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ActivityDef[] $activityDef
     */
    private $activityDef = array(
        
    );

    /**
     * Adds as epoch
     *
     * List of epoch definitions
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Epoch $epoch
     */
    public function addToEpoch(\Medidata\RwsPhp\Schema\StudyDesign\Epoch $epoch)
    {
        $this->epoch[] = $epoch;
        return $this;
    }

    /**
     * isset epoch
     *
     * List of epoch definitions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEpoch($index)
    {
        return isset($this->epoch[$index]);
    }

    /**
     * unset epoch
     *
     * List of epoch definitions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEpoch($index)
    {
        unset($this->epoch[$index]);
    }

    /**
     * Gets as epoch
     *
     * List of epoch definitions
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\Epoch[]
     */
    public function getEpoch()
    {
        return $this->epoch;
    }

    /**
     * Sets a new epoch
     *
     * List of epoch definitions
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Epoch[] $epoch
     * @return self
     */
    public function setEpoch(array $epoch)
    {
        $this->epoch = $epoch;
        return $this;
    }

    /**
     * Adds as arm
     *
     * List of arm definitions
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Arm $arm
     */
    public function addToArm(\Medidata\RwsPhp\Schema\StudyDesign\Arm $arm)
    {
        $this->arm[] = $arm;
        return $this;
    }

    /**
     * isset arm
     *
     * List of arm definitions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArm($index)
    {
        return isset($this->arm[$index]);
    }

    /**
     * unset arm
     *
     * List of arm definitions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArm($index)
    {
        unset($this->arm[$index]);
    }

    /**
     * Gets as arm
     *
     * List of arm definitions
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\Arm[]
     */
    public function getArm()
    {
        return $this->arm;
    }

    /**
     * Sets a new arm
     *
     * List of arm definitions
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Arm[] $arm
     * @return self
     */
    public function setArm(array $arm)
    {
        $this->arm = $arm;
        return $this;
    }

    /**
     * Adds as cellDef
     *
     * List of cell definitions
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\CellDef $cellDef
     */
    public function addToCellDef(\Medidata\RwsPhp\Schema\StudyDesign\CellDef $cellDef)
    {
        $this->cellDef[] = $cellDef;
        return $this;
    }

    /**
     * isset cellDef
     *
     * List of cell definitions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCellDef($index)
    {
        return isset($this->cellDef[$index]);
    }

    /**
     * unset cellDef
     *
     * List of cell definitions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCellDef($index)
    {
        unset($this->cellDef[$index]);
    }

    /**
     * Gets as cellDef
     *
     * List of cell definitions
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\CellDef[]
     */
    public function getCellDef()
    {
        return $this->cellDef;
    }

    /**
     * Sets a new cellDef
     *
     * List of cell definitions
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\CellDef[] $cellDef
     * @return self
     */
    public function setCellDef(array $cellDef)
    {
        $this->cellDef = $cellDef;
        return $this;
    }

    /**
     * Adds as segmentDef
     *
     * List of segment definitions
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\SegmentDef $segmentDef
     */
    public function addToSegmentDef(\Medidata\RwsPhp\Schema\StudyDesign\SegmentDef $segmentDef)
    {
        $this->segmentDef[] = $segmentDef;
        return $this;
    }

    /**
     * isset segmentDef
     *
     * List of segment definitions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSegmentDef($index)
    {
        return isset($this->segmentDef[$index]);
    }

    /**
     * unset segmentDef
     *
     * List of segment definitions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSegmentDef($index)
    {
        unset($this->segmentDef[$index]);
    }

    /**
     * Gets as segmentDef
     *
     * List of segment definitions
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\SegmentDef[]
     */
    public function getSegmentDef()
    {
        return $this->segmentDef;
    }

    /**
     * Sets a new segmentDef
     *
     * List of segment definitions
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\SegmentDef[] $segmentDef
     * @return self
     */
    public function setSegmentDef(array $segmentDef)
    {
        $this->segmentDef = $segmentDef;
        return $this;
    }

    /**
     * Adds as activityDef
     *
     * List of activity definitions
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ActivityDef $activityDef
     */
    public function addToActivityDef(\Medidata\RwsPhp\Schema\StudyDesign\ActivityDef $activityDef)
    {
        $this->activityDef[] = $activityDef;
        return $this;
    }

    /**
     * isset activityDef
     *
     * List of activity definitions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActivityDef($index)
    {
        return isset($this->activityDef[$index]);
    }

    /**
     * unset activityDef
     *
     * List of activity definitions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActivityDef($index)
    {
        unset($this->activityDef[$index]);
    }

    /**
     * Gets as activityDef
     *
     * List of activity definitions
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ActivityDef[]
     */
    public function getActivityDef()
    {
        return $this->activityDef;
    }

    /**
     * Sets a new activityDef
     *
     * List of activity definitions
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ActivityDef[] $activityDef
     * @return self
     */
    public function setActivityDef(array $activityDef)
    {
        $this->activityDef = $activityDef;
        return $this;
    }


}

