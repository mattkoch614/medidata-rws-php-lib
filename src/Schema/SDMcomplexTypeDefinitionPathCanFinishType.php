<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionPathCanFinishType
 *
 * The PathCanFinish element allows to specify activities for which it is not
 * necessarily an error that the workflow does not provide a transition from that
 * activity to another activity
 * XSD Type: SDMcomplexTypeDefinition-PathCanFinish
 */
class SDMcomplexTypeDefinitionPathCanFinishType
{

    /**
     * Description of the activities for which the lack of outgoing transitions from
     * those activities is an intentional part of the design rather than an error of
     * omission
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Reference to an activity that is allowed to be an end-of-path activity
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef[] $activityRef
     */
    private $activityRef = array(
        
    );

    /**
     * Gets as description
     *
     * Description of the activities for which the lack of outgoing transitions from
     * those activities is an intentional part of the design rather than an error of
     * omission
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
     * Description of the activities for which the lack of outgoing transitions from
     * those activities is an intentional part of the design rather than an error of
     * omission
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
     * Reference to an activity that is allowed to be an end-of-path activity
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
     * Reference to an activity that is allowed to be an end-of-path activity
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
     * Reference to an activity that is allowed to be an end-of-path activity
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
     * Reference to an activity that is allowed to be an end-of-path activity
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
     * Reference to an activity that is allowed to be an end-of-path activity
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

