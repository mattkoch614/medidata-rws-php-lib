<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionSwitchType
 *
 * The Switch element defines a set of TransitionDestination elements that are to
 * be evaluated in the order they are encountered
 * XSD Type: SDMcomplexTypeDefinition-Switch
 */
class SDMcomplexTypeDefinitionSwitchType
{

    /**
     * Single target activity and condition for the transition
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\TransitionDestination[]
     * $transitionDestination
     */
    private $transitionDestination = array(
        
    );

    /**
     * Default transition
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\TransitionDefault
     * $transitionDefault
     */
    private $transitionDefault = null;

    /**
     * Adds as transitionDestination
     *
     * Single target activity and condition for the transition
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\TransitionDestination
     * $transitionDestination
     */
    public function addToTransitionDestination(\Medidata\RwsPhp\Schema\StudyDesign\TransitionDestination $transitionDestination)
    {
        $this->transitionDestination[] = $transitionDestination;
        return $this;
    }

    /**
     * isset transitionDestination
     *
     * Single target activity and condition for the transition
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransitionDestination($index)
    {
        return isset($this->transitionDestination[$index]);
    }

    /**
     * unset transitionDestination
     *
     * Single target activity and condition for the transition
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransitionDestination($index)
    {
        unset($this->transitionDestination[$index]);
    }

    /**
     * Gets as transitionDestination
     *
     * Single target activity and condition for the transition
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\TransitionDestination[]
     */
    public function getTransitionDestination()
    {
        return $this->transitionDestination;
    }

    /**
     * Sets a new transitionDestination
     *
     * Single target activity and condition for the transition
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\TransitionDestination[]
     * $transitionDestination
     * @return self
     */
    public function setTransitionDestination(array $transitionDestination)
    {
        $this->transitionDestination = $transitionDestination;
        return $this;
    }

    /**
     * Gets as transitionDefault
     *
     * Default transition
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\TransitionDefault
     */
    public function getTransitionDefault()
    {
        return $this->transitionDefault;
    }

    /**
     * Sets a new transitionDefault
     *
     * Default transition
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\TransitionDefault $transitionDefault
     * @return self
     */
    public function setTransitionDefault(\Medidata\RwsPhp\Schema\StudyDesign\TransitionDefault $transitionDefault)
    {
        $this->transitionDefault = $transitionDefault;
        return $this;
    }


}

