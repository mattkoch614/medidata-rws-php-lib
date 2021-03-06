<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionStudyStartType
 *
 * The StudyStart references an activity that is the entry point into the study
 * XSD Type: SDMcomplexTypeDefinition-StudyStart
 */
class SDMcomplexTypeDefinitionStudyStartType
{

    /**
     * Description of the study start activity
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Reference to an activity acts as the start finish activity
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef $activityRef
     */
    private $activityRef = null;

    /**
     * Gets as description
     *
     * Description of the study start activity
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
     * Description of the study start activity
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
     * Gets as activityRef
     *
     * Reference to an activity acts as the start finish activity
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef
     */
    public function getActivityRef()
    {
        return $this->activityRef;
    }

    /**
     * Sets a new activityRef
     *
     * Reference to an activity acts as the start finish activity
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ActivityRef $activityRef
     * @return self
     */
    public function setActivityRef(\Medidata\RwsPhp\Schema\StudyDesign\ActivityRef $activityRef)
    {
        $this->activityRef = $activityRef;
        return $this;
    }


}

