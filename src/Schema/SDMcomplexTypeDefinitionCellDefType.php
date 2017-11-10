<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionCellDefType
 *
 * A CellDef provides for the declaration of a study cell, which is a common
 * study-design 
 *  visualization for the intersection of an epoch with an arm.
 * XSD Type: SDMcomplexTypeDefinition-CellDef
 */
class SDMcomplexTypeDefinitionCellDefType
{

    /**
     * Unique identifier for the cell
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name for the cell
     *
     * @property string $name
     */
    private $name = null;

    /**
     * OID of the Epoch in which the cell is contained.
     *
     * @property string $epochOID
     */
    private $epochOID = null;

    /**
     * Cell description
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Container for definition association between cells and arms
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ArmAssociation $armAssociation
     */
    private $armAssociation = null;

    /**
     * List of segments contained in the cell.
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\SegmentRef[] $segmentRef
     */
    private $segmentRef = array(
        
    );

    /**
     * Gets as oID
     *
     * Unique identifier for the cell
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
     * Unique identifier for the cell
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
     * Short name for the cell
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
     * Short name for the cell
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
     * Gets as epochOID
     *
     * OID of the Epoch in which the cell is contained.
     *
     * @return string
     */
    public function getEpochOID()
    {
        return $this->epochOID;
    }

    /**
     * Sets a new epochOID
     *
     * OID of the Epoch in which the cell is contained.
     *
     * @param string $epochOID
     * @return self
     */
    public function setEpochOID($epochOID)
    {
        $this->epochOID = $epochOID;
        return $this;
    }

    /**
     * Gets as description
     *
     * Cell description
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
     * Cell description
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
     * Gets as armAssociation
     *
     * Container for definition association between cells and arms
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ArmAssociation
     */
    public function getArmAssociation()
    {
        return $this->armAssociation;
    }

    /**
     * Sets a new armAssociation
     *
     * Container for definition association between cells and arms
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ArmAssociation $armAssociation
     * @return self
     */
    public function setArmAssociation(\Medidata\RwsPhp\Schema\StudyDesign\ArmAssociation $armAssociation)
    {
        $this->armAssociation = $armAssociation;
        return $this;
    }

    /**
     * Adds as segmentRef
     *
     * List of segments contained in the cell.
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\SegmentRef $segmentRef
     */
    public function addToSegmentRef(\Medidata\RwsPhp\Schema\StudyDesign\SegmentRef $segmentRef)
    {
        $this->segmentRef[] = $segmentRef;
        return $this;
    }

    /**
     * isset segmentRef
     *
     * List of segments contained in the cell.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSegmentRef($index)
    {
        return isset($this->segmentRef[$index]);
    }

    /**
     * unset segmentRef
     *
     * List of segments contained in the cell.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSegmentRef($index)
    {
        unset($this->segmentRef[$index]);
    }

    /**
     * Gets as segmentRef
     *
     * List of segments contained in the cell.
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\SegmentRef[]
     */
    public function getSegmentRef()
    {
        return $this->segmentRef;
    }

    /**
     * Sets a new segmentRef
     *
     * List of segments contained in the cell.
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\SegmentRef[] $segmentRef
     * @return self
     */
    public function setSegmentRef(array $segmentRef)
    {
        $this->segmentRef = $segmentRef;
        return $this;
    }


}

