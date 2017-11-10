<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionWorkflowType
 *
 * The Workflow element describes the workflow between activities in the study.
 * XSD Type: SDMcomplexTypeDefinition-Workflow
 */
class SDMcomplexTypeDefinitionWorkflowType
{

    /**
     * References the Activity that acts as the study start
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\StudyStart $studyStart
     */
    private $studyStart = null;

    /**
     * References the Activity that acts as the study finish
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\StudyFinish $studyFinish
     */
    private $studyFinish = null;

    /**
     * Specifies activities that are allowed to be at the end of a workflow path
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\PathCanFinish $pathCanFinish
     */
    private $pathCanFinish = null;

    /**
     * List of entry- and exit criteria for structural elements
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\EntryExitCriteria[]
     * $entryExitCriteria
     */
    private $entryExitCriteria = array(
        
    );

    /**
     * A set of potential branches in the workflow
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Transition[] $transition
     */
    private $transition = array(
        
    );

    /**
     * Trigger for unplanned activities
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Trigger[] $trigger
     */
    private $trigger = array(
        
    );

    /**
     * Gets as studyStart
     *
     * References the Activity that acts as the study start
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\StudyStart
     */
    public function getStudyStart()
    {
        return $this->studyStart;
    }

    /**
     * Sets a new studyStart
     *
     * References the Activity that acts as the study start
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\StudyStart $studyStart
     * @return self
     */
    public function setStudyStart(\Medidata\RwsPhp\Schema\StudyDesign\StudyStart $studyStart)
    {
        $this->studyStart = $studyStart;
        return $this;
    }

    /**
     * Gets as studyFinish
     *
     * References the Activity that acts as the study finish
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\StudyFinish
     */
    public function getStudyFinish()
    {
        return $this->studyFinish;
    }

    /**
     * Sets a new studyFinish
     *
     * References the Activity that acts as the study finish
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\StudyFinish $studyFinish
     * @return self
     */
    public function setStudyFinish(\Medidata\RwsPhp\Schema\StudyDesign\StudyFinish $studyFinish)
    {
        $this->studyFinish = $studyFinish;
        return $this;
    }

    /**
     * Gets as pathCanFinish
     *
     * Specifies activities that are allowed to be at the end of a workflow path
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\PathCanFinish
     */
    public function getPathCanFinish()
    {
        return $this->pathCanFinish;
    }

    /**
     * Sets a new pathCanFinish
     *
     * Specifies activities that are allowed to be at the end of a workflow path
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\PathCanFinish $pathCanFinish
     * @return self
     */
    public function setPathCanFinish(\Medidata\RwsPhp\Schema\StudyDesign\PathCanFinish $pathCanFinish)
    {
        $this->pathCanFinish = $pathCanFinish;
        return $this;
    }

    /**
     * Adds as entryExitCriteria
     *
     * List of entry- and exit criteria for structural elements
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\EntryExitCriteria $entryExitCriteria
     */
    public function addToEntryExitCriteria(\Medidata\RwsPhp\Schema\StudyDesign\EntryExitCriteria $entryExitCriteria)
    {
        $this->entryExitCriteria[] = $entryExitCriteria;
        return $this;
    }

    /**
     * isset entryExitCriteria
     *
     * List of entry- and exit criteria for structural elements
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEntryExitCriteria($index)
    {
        return isset($this->entryExitCriteria[$index]);
    }

    /**
     * unset entryExitCriteria
     *
     * List of entry- and exit criteria for structural elements
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEntryExitCriteria($index)
    {
        unset($this->entryExitCriteria[$index]);
    }

    /**
     * Gets as entryExitCriteria
     *
     * List of entry- and exit criteria for structural elements
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\EntryExitCriteria[]
     */
    public function getEntryExitCriteria()
    {
        return $this->entryExitCriteria;
    }

    /**
     * Sets a new entryExitCriteria
     *
     * List of entry- and exit criteria for structural elements
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\EntryExitCriteria[]
     * $entryExitCriteria
     * @return self
     */
    public function setEntryExitCriteria(array $entryExitCriteria)
    {
        $this->entryExitCriteria = $entryExitCriteria;
        return $this;
    }

    /**
     * Adds as transition
     *
     * A set of potential branches in the workflow
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Transition $transition
     */
    public function addToTransition(\Medidata\RwsPhp\Schema\StudyDesign\Transition $transition)
    {
        $this->transition[] = $transition;
        return $this;
    }

    /**
     * isset transition
     *
     * A set of potential branches in the workflow
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransition($index)
    {
        return isset($this->transition[$index]);
    }

    /**
     * unset transition
     *
     * A set of potential branches in the workflow
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransition($index)
    {
        unset($this->transition[$index]);
    }

    /**
     * Gets as transition
     *
     * A set of potential branches in the workflow
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\Transition[]
     */
    public function getTransition()
    {
        return $this->transition;
    }

    /**
     * Sets a new transition
     *
     * A set of potential branches in the workflow
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Transition[] $transition
     * @return self
     */
    public function setTransition(array $transition)
    {
        $this->transition = $transition;
        return $this;
    }

    /**
     * Adds as trigger
     *
     * Trigger for unplanned activities
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Trigger $trigger
     */
    public function addToTrigger(\Medidata\RwsPhp\Schema\StudyDesign\Trigger $trigger)
    {
        $this->trigger[] = $trigger;
        return $this;
    }

    /**
     * isset trigger
     *
     * Trigger for unplanned activities
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrigger($index)
    {
        return isset($this->trigger[$index]);
    }

    /**
     * unset trigger
     *
     * Trigger for unplanned activities
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrigger($index)
    {
        unset($this->trigger[$index]);
    }

    /**
     * Gets as trigger
     *
     * Trigger for unplanned activities
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\Trigger[]
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * Sets a new trigger
     *
     * Trigger for unplanned activities
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Trigger[] $trigger
     * @return self
     */
    public function setTrigger(array $trigger)
    {
        $this->trigger = $trigger;
        return $this;
    }


}

