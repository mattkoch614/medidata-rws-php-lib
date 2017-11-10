<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionTimingType
 *
 * All timing constructs are grouped beneath the Timing element.
 * XSD Type: SDMcomplexTypeDefinition-Timing
 */
class SDMcomplexTypeDefinitionTimingType
{

    /**
     * Zero or more absolute timing constraints may be defined.
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\AbsoluteTimingConstraint[]
     * $absoluteTimingConstraint
     */
    private $absoluteTimingConstraint = array(
        
    );

    /**
     * Zero or more relative timing constraints may be defined.
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\RelativeTimingConstraint[]
     * $relativeTimingConstraint
     */
    private $relativeTimingConstraint = array(
        
    );

    /**
     * Zero or more transition timing constraints may be defined.
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\TransitionTimingConstraint[]
     * $transitionTimingConstraint
     */
    private $transitionTimingConstraint = array(
        
    );

    /**
     * Zero or more activity durations may be defined.
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ActivityDuration[]
     * $activityDuration
     */
    private $activityDuration = array(
        
    );

    /**
     * Adds as absoluteTimingConstraint
     *
     * Zero or more absolute timing constraints may be defined.
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\AbsoluteTimingConstraint
     * $absoluteTimingConstraint
     */
    public function addToAbsoluteTimingConstraint(\Medidata\RwsPhp\Schema\StudyDesign\AbsoluteTimingConstraint $absoluteTimingConstraint)
    {
        $this->absoluteTimingConstraint[] = $absoluteTimingConstraint;
        return $this;
    }

    /**
     * isset absoluteTimingConstraint
     *
     * Zero or more absolute timing constraints may be defined.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAbsoluteTimingConstraint($index)
    {
        return isset($this->absoluteTimingConstraint[$index]);
    }

    /**
     * unset absoluteTimingConstraint
     *
     * Zero or more absolute timing constraints may be defined.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAbsoluteTimingConstraint($index)
    {
        unset($this->absoluteTimingConstraint[$index]);
    }

    /**
     * Gets as absoluteTimingConstraint
     *
     * Zero or more absolute timing constraints may be defined.
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\AbsoluteTimingConstraint[]
     */
    public function getAbsoluteTimingConstraint()
    {
        return $this->absoluteTimingConstraint;
    }

    /**
     * Sets a new absoluteTimingConstraint
     *
     * Zero or more absolute timing constraints may be defined.
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\AbsoluteTimingConstraint[]
     * $absoluteTimingConstraint
     * @return self
     */
    public function setAbsoluteTimingConstraint(array $absoluteTimingConstraint)
    {
        $this->absoluteTimingConstraint = $absoluteTimingConstraint;
        return $this;
    }

    /**
     * Adds as relativeTimingConstraint
     *
     * Zero or more relative timing constraints may be defined.
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\RelativeTimingConstraint
     * $relativeTimingConstraint
     */
    public function addToRelativeTimingConstraint(\Medidata\RwsPhp\Schema\StudyDesign\RelativeTimingConstraint $relativeTimingConstraint)
    {
        $this->relativeTimingConstraint[] = $relativeTimingConstraint;
        return $this;
    }

    /**
     * isset relativeTimingConstraint
     *
     * Zero or more relative timing constraints may be defined.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelativeTimingConstraint($index)
    {
        return isset($this->relativeTimingConstraint[$index]);
    }

    /**
     * unset relativeTimingConstraint
     *
     * Zero or more relative timing constraints may be defined.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelativeTimingConstraint($index)
    {
        unset($this->relativeTimingConstraint[$index]);
    }

    /**
     * Gets as relativeTimingConstraint
     *
     * Zero or more relative timing constraints may be defined.
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\RelativeTimingConstraint[]
     */
    public function getRelativeTimingConstraint()
    {
        return $this->relativeTimingConstraint;
    }

    /**
     * Sets a new relativeTimingConstraint
     *
     * Zero or more relative timing constraints may be defined.
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\RelativeTimingConstraint[]
     * $relativeTimingConstraint
     * @return self
     */
    public function setRelativeTimingConstraint(array $relativeTimingConstraint)
    {
        $this->relativeTimingConstraint = $relativeTimingConstraint;
        return $this;
    }

    /**
     * Adds as transitionTimingConstraint
     *
     * Zero or more transition timing constraints may be defined.
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\TransitionTimingConstraint
     * $transitionTimingConstraint
     */
    public function addToTransitionTimingConstraint(\Medidata\RwsPhp\Schema\StudyDesign\TransitionTimingConstraint $transitionTimingConstraint)
    {
        $this->transitionTimingConstraint[] = $transitionTimingConstraint;
        return $this;
    }

    /**
     * isset transitionTimingConstraint
     *
     * Zero or more transition timing constraints may be defined.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransitionTimingConstraint($index)
    {
        return isset($this->transitionTimingConstraint[$index]);
    }

    /**
     * unset transitionTimingConstraint
     *
     * Zero or more transition timing constraints may be defined.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransitionTimingConstraint($index)
    {
        unset($this->transitionTimingConstraint[$index]);
    }

    /**
     * Gets as transitionTimingConstraint
     *
     * Zero or more transition timing constraints may be defined.
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\TransitionTimingConstraint[]
     */
    public function getTransitionTimingConstraint()
    {
        return $this->transitionTimingConstraint;
    }

    /**
     * Sets a new transitionTimingConstraint
     *
     * Zero or more transition timing constraints may be defined.
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\TransitionTimingConstraint[]
     * $transitionTimingConstraint
     * @return self
     */
    public function setTransitionTimingConstraint(array $transitionTimingConstraint)
    {
        $this->transitionTimingConstraint = $transitionTimingConstraint;
        return $this;
    }

    /**
     * Adds as activityDuration
     *
     * Zero or more activity durations may be defined.
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ActivityDuration $activityDuration
     */
    public function addToActivityDuration(\Medidata\RwsPhp\Schema\StudyDesign\ActivityDuration $activityDuration)
    {
        $this->activityDuration[] = $activityDuration;
        return $this;
    }

    /**
     * isset activityDuration
     *
     * Zero or more activity durations may be defined.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActivityDuration($index)
    {
        return isset($this->activityDuration[$index]);
    }

    /**
     * unset activityDuration
     *
     * Zero or more activity durations may be defined.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActivityDuration($index)
    {
        unset($this->activityDuration[$index]);
    }

    /**
     * Gets as activityDuration
     *
     * Zero or more activity durations may be defined.
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ActivityDuration[]
     */
    public function getActivityDuration()
    {
        return $this->activityDuration;
    }

    /**
     * Sets a new activityDuration
     *
     * Zero or more activity durations may be defined.
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ActivityDuration[] $activityDuration
     * @return self
     */
    public function setActivityDuration(array $activityDuration)
    {
        $this->activityDuration = $activityDuration;
        return $this;
    }


}

