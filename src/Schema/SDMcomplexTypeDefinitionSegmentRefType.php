<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionSegmentRefType
 *
 * A SegmentRef links cell definitions to segments.
 * XSD Type: SDMcomplexTypeDefinition-SegmentRef
 */
class SDMcomplexTypeDefinitionSegmentRefType
{

    /**
     * OID of the referenced SegmentDef
     *
     * @property string $segmentOID
     */
    private $segmentOID = null;

    /**
     * Optional ordering of segments within parent element (overrides document order)
     *
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * Gets as segmentOID
     *
     * OID of the referenced SegmentDef
     *
     * @return string
     */
    public function getSegmentOID()
    {
        return $this->segmentOID;
    }

    /**
     * Sets a new segmentOID
     *
     * OID of the referenced SegmentDef
     *
     * @param string $segmentOID
     * @return self
     */
    public function setSegmentOID($segmentOID)
    {
        $this->segmentOID = $segmentOID;
        return $this;
    }

    /**
     * Gets as orderNumber
     *
     * Optional ordering of segments within parent element (overrides document order)
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
     * Optional ordering of segments within parent element (overrides document order)
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

