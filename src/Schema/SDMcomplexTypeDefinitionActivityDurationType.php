<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionActivityDurationType
 *
 * Defines the normal length of time that an activity would take, also allowing the
 * specification of plus/minus windows.
 * XSD Type: SDMcomplexTypeDefinition-ActivityDuration
 */
class SDMcomplexTypeDefinitionActivityDurationType
{

    /**
     * Unique identifier for the activity duration.
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * The name of the activity duration.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The activity to which this duration information relates.
     *
     * @property string $activityOID
     */
    private $activityOID = null;

    /**
     * The length of time that the activity would normally take.
     *
     * @property string $plannedDuration
     */
    private $plannedDuration = null;

    /**
     * A duration that would be applied to the planned duration to calculate the
     * pre-window.
     *
     * @property string $plannedDurationPreWindow
     */
    private $plannedDurationPreWindow = null;

    /**
     * A duration that would be applied to the planned duration to calculate the
     * post-window.
     *
     * @property string $plannedDurationPostWindow
     */
    private $plannedDurationPostWindow = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the activity duration.
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
     * Unique identifier for the activity duration.
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
     * The name of the activity duration.
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
     * The name of the activity duration.
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
     * The activity to which this duration information relates.
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
     * The activity to which this duration information relates.
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
     * Gets as plannedDuration
     *
     * The length of time that the activity would normally take.
     *
     * @return string
     */
    public function getPlannedDuration()
    {
        return $this->plannedDuration;
    }

    /**
     * Sets a new plannedDuration
     *
     * The length of time that the activity would normally take.
     *
     * @param string $plannedDuration
     * @return self
     */
    public function setPlannedDuration($plannedDuration)
    {
        $this->plannedDuration = $plannedDuration;
        return $this;
    }

    /**
     * Gets as plannedDurationPreWindow
     *
     * A duration that would be applied to the planned duration to calculate the
     * pre-window.
     *
     * @return string
     */
    public function getPlannedDurationPreWindow()
    {
        return $this->plannedDurationPreWindow;
    }

    /**
     * Sets a new plannedDurationPreWindow
     *
     * A duration that would be applied to the planned duration to calculate the
     * pre-window.
     *
     * @param string $plannedDurationPreWindow
     * @return self
     */
    public function setPlannedDurationPreWindow($plannedDurationPreWindow)
    {
        $this->plannedDurationPreWindow = $plannedDurationPreWindow;
        return $this;
    }

    /**
     * Gets as plannedDurationPostWindow
     *
     * A duration that would be applied to the planned duration to calculate the
     * post-window.
     *
     * @return string
     */
    public function getPlannedDurationPostWindow()
    {
        return $this->plannedDurationPostWindow;
    }

    /**
     * Sets a new plannedDurationPostWindow
     *
     * A duration that would be applied to the planned duration to calculate the
     * post-window.
     *
     * @param string $plannedDurationPostWindow
     * @return self
     */
    public function setPlannedDurationPostWindow($plannedDurationPostWindow)
    {
        $this->plannedDurationPostWindow = $plannedDurationPostWindow;
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

