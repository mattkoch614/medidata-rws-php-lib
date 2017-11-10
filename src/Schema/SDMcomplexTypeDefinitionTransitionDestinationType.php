<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionTransitionDestinationType
 *
 * The TransitionDestination element references a single target activity and a
 * condition.
 *  When a TransitionDestination element is encountered, and its referenced
 * condition evaluates to true, then the destination is to be followed
 * XSD Type: SDMcomplexTypeDefinition-TransitionDestination
 */
class SDMcomplexTypeDefinitionTransitionDestinationType
{

    /**
     * Unique identifier for the TransitionDestination
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name or description
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Reference to the activity which is the target activity of the transition
     *
     * @property string $targetActivityOID
     */
    private $targetActivityOID = null;

    /**
     * Reference to the condition under which the destination is to be followed
     *
     * @property string $conditionOID
     */
    private $conditionOID = null;

    /**
     * Optional order number indicating the order in which the conditions for the
     * transitions must be evaluated.
     *  Each TransitionDestination element within its parent Switch element must have
     * an OrderNumber attribute with a unique value, 
     *  or none of the TransitionDestination elements within the parent Switch element
     * must have an OrderNumber attribute.
     *  It is an error if one TransitionDestination within a Switch element has an
     * OrderNumber attribute, whereas one or more others don't.
     *
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * Description of the transition destination
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the TransitionDestination
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
     * Unique identifier for the TransitionDestination
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
     * Short name or description
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
     * Short name or description
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
     * Gets as targetActivityOID
     *
     * Reference to the activity which is the target activity of the transition
     *
     * @return string
     */
    public function getTargetActivityOID()
    {
        return $this->targetActivityOID;
    }

    /**
     * Sets a new targetActivityOID
     *
     * Reference to the activity which is the target activity of the transition
     *
     * @param string $targetActivityOID
     * @return self
     */
    public function setTargetActivityOID($targetActivityOID)
    {
        $this->targetActivityOID = $targetActivityOID;
        return $this;
    }

    /**
     * Gets as conditionOID
     *
     * Reference to the condition under which the destination is to be followed
     *
     * @return string
     */
    public function getConditionOID()
    {
        return $this->conditionOID;
    }

    /**
     * Sets a new conditionOID
     *
     * Reference to the condition under which the destination is to be followed
     *
     * @param string $conditionOID
     * @return self
     */
    public function setConditionOID($conditionOID)
    {
        $this->conditionOID = $conditionOID;
        return $this;
    }

    /**
     * Gets as orderNumber
     *
     * Optional order number indicating the order in which the conditions for the
     * transitions must be evaluated.
     *  Each TransitionDestination element within its parent Switch element must have
     * an OrderNumber attribute with a unique value, 
     *  or none of the TransitionDestination elements within the parent Switch element
     * must have an OrderNumber attribute.
     *  It is an error if one TransitionDestination within a Switch element has an
     * OrderNumber attribute, whereas one or more others don't.
     *
     * @return integer
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Sets a new orderNumber
     *
     * Optional order number indicating the order in which the conditions for the
     * transitions must be evaluated.
     *  Each TransitionDestination element within its parent Switch element must have
     * an OrderNumber attribute with a unique value, 
     *  or none of the TransitionDestination elements within the parent Switch element
     * must have an OrderNumber attribute.
     *  It is an error if one TransitionDestination within a Switch element has an
     * OrderNumber attribute, whereas one or more others don't.
     *
     * @param integer $orderNumber
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the transition destination
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
     * Description of the transition destination
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

