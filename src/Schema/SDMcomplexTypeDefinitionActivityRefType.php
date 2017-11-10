<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionActivityRefType
 *
 * An ActivityRef is used in multiple locations to link the containing definition
 * to an activity.
 *  When used within an odm:StudyEventDef and the referenced activity contains
 * FormRefs, those Forms must also be
 *  linke directly from within the StudyEventDef.
 * XSD Type: SDMcomplexTypeDefinition-ActivityRef
 */
class SDMcomplexTypeDefinitionActivityRefType
{

    /**
     * OID of the referenced ActivityDef
     *
     * @property string $activityOID
     */
    private $activityOID = null;

    /**
     * Optional ordering of activities within parent element (overrides document order)
     *
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * Gets as activityOID
     *
     * OID of the referenced ActivityDef
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
     * OID of the referenced ActivityDef
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
     * Gets as orderNumber
     *
     * Optional ordering of activities within parent element (overrides document order)
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
     * Optional ordering of activities within parent element (overrides document order)
     *
     * @param integer $orderNumber
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }


}

