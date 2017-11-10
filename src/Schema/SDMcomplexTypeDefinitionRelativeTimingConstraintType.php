<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionRelativeTimingConstraintType
 *
 * A relative timing constraint allows for the scheduling of an activity to be
 * relative to another activity anywhere in the study design.
 * XSD Type: SDMcomplexTypeDefinition-RelativeTimingConstraint
 */
class SDMcomplexTypeDefinitionRelativeTimingConstraintType
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
     * Identifies the predecessor activity that forms the basis for the relative
     * timing.
     *
     * @property string $predecessorActivityOID
     */
    private $predecessorActivityOID = null;

    /**
     * Identifies the successor activity that should be scheduled relative to the
     * predecessor.
     *
     * @property string $successorActivityOID
     */
    private $successorActivityOID = null;

    /**
     * Identifies which ends of the activities the timing should be applied to.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The ideal time duration between the activities, given the relationship type.
     *
     * @property string $timepointRelativeTarget
     */
    private $timepointRelativeTarget = null;

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
     * Signifies to an execution engine whether the successor activity should occur
     * based on the planned time of the predecessor or the actual time of the
     * predecessor.
     *
     * @property string $subsequentSchedulingBasis
     */
    private $subsequentSchedulingBasis = null;

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
     * Gets as predecessorActivityOID
     *
     * Identifies the predecessor activity that forms the basis for the relative
     * timing.
     *
     * @return string
     */
    public function getPredecessorActivityOID()
    {
        return $this->predecessorActivityOID;
    }

    /**
     * Sets a new predecessorActivityOID
     *
     * Identifies the predecessor activity that forms the basis for the relative
     * timing.
     *
     * @param string $predecessorActivityOID
     * @return self
     */
    public function setPredecessorActivityOID($predecessorActivityOID)
    {
        $this->predecessorActivityOID = $predecessorActivityOID;
        return $this;
    }

    /**
     * Gets as successorActivityOID
     *
     * Identifies the successor activity that should be scheduled relative to the
     * predecessor.
     *
     * @return string
     */
    public function getSuccessorActivityOID()
    {
        return $this->successorActivityOID;
    }

    /**
     * Sets a new successorActivityOID
     *
     * Identifies the successor activity that should be scheduled relative to the
     * predecessor.
     *
     * @param string $successorActivityOID
     * @return self
     */
    public function setSuccessorActivityOID($successorActivityOID)
    {
        $this->successorActivityOID = $successorActivityOID;
        return $this;
    }

    /**
     * Gets as type
     *
     * Identifies which ends of the activities the timing should be applied to.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies which ends of the activities the timing should be applied to.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as timepointRelativeTarget
     *
     * The ideal time duration between the activities, given the relationship type.
     *
     * @return string
     */
    public function getTimepointRelativeTarget()
    {
        return $this->timepointRelativeTarget;
    }

    /**
     * Sets a new timepointRelativeTarget
     *
     * The ideal time duration between the activities, given the relationship type.
     *
     * @param string $timepointRelativeTarget
     * @return self
     */
    public function setTimepointRelativeTarget($timepointRelativeTarget)
    {
        $this->timepointRelativeTarget = $timepointRelativeTarget;
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
     * Gets as subsequentSchedulingBasis
     *
     * Signifies to an execution engine whether the successor activity should occur
     * based on the planned time of the predecessor or the actual time of the
     * predecessor.
     *
     * @return string
     */
    public function getSubsequentSchedulingBasis()
    {
        return $this->subsequentSchedulingBasis;
    }

    /**
     * Sets a new subsequentSchedulingBasis
     *
     * Signifies to an execution engine whether the successor activity should occur
     * based on the planned time of the predecessor or the actual time of the
     * predecessor.
     *
     * @param string $subsequentSchedulingBasis
     * @return self
     */
    public function setSubsequentSchedulingBasis($subsequentSchedulingBasis)
    {
        $this->subsequentSchedulingBasis = $subsequentSchedulingBasis;
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

