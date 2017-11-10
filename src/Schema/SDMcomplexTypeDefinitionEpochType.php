<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionEpochType
 *
 * An Epoch element represents the information about the study's Epochs.
 * XSD Type: SDMcomplexTypeDefinition-Epoch
 */
class SDMcomplexTypeDefinitionEpochType
{

    /**
     * Unique identifier for the epoch
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name for the epoch
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Optional order number indicating the order in which the Epochs occur within in
     * study.
     *  Either all Epochs within the containing Structure element must have an
     * OrderNumber, or none of the Epochs may have an OrderNumber.
     *  When OrderNumber is used, each Epoch element within its parent Structure
     * element must have unique OrderNumber value.
     *
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * Epoch description
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Gets as oID
     *
     * Unique identifier for the epoch
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
     * Unique identifier for the epoch
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
     * Short name for the epoch
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
     * Short name for the epoch
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
     * Gets as orderNumber
     *
     * Optional order number indicating the order in which the Epochs occur within in
     * study.
     *  Either all Epochs within the containing Structure element must have an
     * OrderNumber, or none of the Epochs may have an OrderNumber.
     *  When OrderNumber is used, each Epoch element within its parent Structure
     * element must have unique OrderNumber value.
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
     * Optional order number indicating the order in which the Epochs occur within in
     * study.
     *  Either all Epochs within the containing Structure element must have an
     * OrderNumber, or none of the Epochs may have an OrderNumber.
     *  When OrderNumber is used, each Epoch element within its parent Structure
     * element must have unique OrderNumber value.
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
     * Epoch description
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
     * Epoch description
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

