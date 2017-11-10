<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionAbsoluteTimingConstraintType
 *
 * Each absolute timing constraint limits when an activity can take place during a
 * given time interval, or to specifies an exact date and time as the ideal timing
 * for an activity.
 * XSD Type: SDMcomplexTypeDefinition-AbsoluteTimingConstraint
 */
class SDMcomplexTypeDefinitionAbsoluteTimingConstraintType
{

    /**
     * Unique identifier for the timing constraint.
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * The name of the timing constraint.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The Activity identifier that this timing constraint refers to.
     *
     * @property string $activityOID
     */
    private $activityOID = null;

    /**
     * The point in time at which the activity ideally should start.
     *
     * @property string $timepointTarget
     */
    private $timepointTarget = null;

    /**
     * The granularity that should be applied to the window once the target time has
     * had the pre and post windows applied.
     *
     * @property string $timepointGranularity
     */
    private $timepointGranularity = null;

    /**
     * Specifies a window (duration) prior to the target time when it is allowed for
     * the activity to start.
     *
     * @property string $timepointPreWindow
     */
    private $timepointPreWindow = null;

    /**
     * Specifies a window (duration) after the target time when it is allowed for the
     * activity to start.
     *
     * @property string $timepointPostWindow
     */
    private $timepointPostWindow = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the timing constraint.
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
     * Unique identifier for the timing constraint.
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
     * The name of the timing constraint.
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
     * The name of the timing constraint.
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
     * Gets as activityOID
     *
     * The Activity identifier that this timing constraint refers to.
     *
     * @return string
     */
    public function getActivityOID()
    {
        return $this->activityOID;
    }

    /**
     * Sets a new activityOID
     *
     * The Activity identifier that this timing constraint refers to.
     *
     * @param string $activityOID
     * @return self
     */
    public function setActivityOID($activityOID)
    {
        $this->activityOID = $activityOID;
        return $this;
    }

    /**
     * Gets as timepointTarget
     *
     * The point in time at which the activity ideally should start.
     *
     * @return string
     */
    public function getTimepointTarget()
    {
        return $this->timepointTarget;
    }

    /**
     * Sets a new timepointTarget
     *
     * The point in time at which the activity ideally should start.
     *
     * @param string $timepointTarget
     * @return self
     */
    public function setTimepointTarget($timepointTarget)
    {
        $this->timepointTarget = $timepointTarget;
        return $this;
    }

    /**
     * Gets as timepointGranularity
     *
     * The granularity that should be applied to the window once the target time has
     * had the pre and post windows applied.
     *
     * @return string
     */
    public function getTimepointGranularity()
    {
        return $this->timepointGranularity;
    }

    /**
     * Sets a new timepointGranularity
     *
     * The granularity that should be applied to the window once the target time has
     * had the pre and post windows applied.
     *
     * @param string $timepointGranularity
     * @return self
     */
    public function setTimepointGranularity($timepointGranularity)
    {
        $this->timepointGranularity = $timepointGranularity;
        return $this;
    }

    /**
     * Gets as timepointPreWindow
     *
     * Specifies a window (duration) prior to the target time when it is allowed for
     * the activity to start.
     *
     * @return string
     */
    public function getTimepointPreWindow()
    {
        return $this->timepointPreWindow;
    }

    /**
     * Sets a new timepointPreWindow
     *
     * Specifies a window (duration) prior to the target time when it is allowed for
     * the activity to start.
     *
     * @param string $timepointPreWindow
     * @return self
     */
    public function setTimepointPreWindow($timepointPreWindow)
    {
        $this->timepointPreWindow = $timepointPreWindow;
        return $this;
    }

    /**
     * Gets as timepointPostWindow
     *
     * Specifies a window (duration) after the target time when it is allowed for the
     * activity to start.
     *
     * @return string
     */
    public function getTimepointPostWindow()
    {
        return $this->timepointPostWindow;
    }

    /**
     * Sets a new timepointPostWindow
     *
     * Specifies a window (duration) after the target time when it is allowed for the
     * activity to start.
     *
     * @param string $timepointPostWindow
     * @return self
     */
    public function setTimepointPostWindow($timepointPostWindow)
    {
        $this->timepointPostWindow = $timepointPostWindow;
        return $this;
    }

    /**
     * Gets as description
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
     * @param \Medidata\RwsPhp\Schema\ODM\Description $description
     * @return self
     */
    public function setDescription(\Medidata\RwsPhp\Schema\ODM\Description $description)
    {
        $this->description = $description;
        return $this;
    }


}

