<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionAuditRecordType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-AuditRecord
 */
class ODMcomplexTypeDefinitionAuditRecordType
{

    /**
     * @property string $editPoint
     */
    private $editPoint = null;

    /**
     * @property string $usedImputationMethod
     */
    private $usedImputationMethod = null;

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\UserRef $userRef
     */
    private $userRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef
     */
    private $locationRef = null;

    /**
     * @property \DateTime $dateTimeStamp
     */
    private $dateTimeStamp = null;

    /**
     * @property string $reasonForChange
     */
    private $reasonForChange = null;

    /**
     * @property string $sourceID
     */
    private $sourceID = null;

    /**
     * Gets as editPoint
     *
     * @return string
     */
    public function getEditPoint()
    {
        return $this->editPoint;
    }

    /**
     * Sets a new editPoint
     *
     * @param string $editPoint
     * @return self
     */
    public function setEditPoint($editPoint)
    {
        $this->editPoint = $editPoint;
        return $this;
    }

    /**
     * Gets as usedImputationMethod
     *
     * @return string
     */
    public function getUsedImputationMethod()
    {
        return $this->usedImputationMethod;
    }

    /**
     * Sets a new usedImputationMethod
     *
     * @param string $usedImputationMethod
     * @return self
     */
    public function setUsedImputationMethod($usedImputationMethod)
    {
        $this->usedImputationMethod = $usedImputationMethod;
        return $this;
    }

    /**
     * Gets as iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as userRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\UserRef
     */
    public function getUserRef()
    {
        return $this->userRef;
    }

    /**
     * Sets a new userRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\UserRef $userRef
     * @return self
     */
    public function setUserRef(\Medidata\RwsPhp\Schema\ODM\UserRef $userRef)
    {
        $this->userRef = $userRef;
        return $this;
    }

    /**
     * Gets as locationRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\LocationRef
     */
    public function getLocationRef()
    {
        return $this->locationRef;
    }

    /**
     * Sets a new locationRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef
     * @return self
     */
    public function setLocationRef(\Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef)
    {
        $this->locationRef = $locationRef;
        return $this;
    }

    /**
     * Gets as dateTimeStamp
     *
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * Sets a new dateTimeStamp
     *
     * @param \DateTime $dateTimeStamp
     * @return self
     */
    public function setDateTimeStamp(\DateTime $dateTimeStamp)
    {
        $this->dateTimeStamp = $dateTimeStamp;
        return $this;
    }

    /**
     * Gets as reasonForChange
     *
     * @return string
     */
    public function getReasonForChange()
    {
        return $this->reasonForChange;
    }

    /**
     * Sets a new reasonForChange
     *
     * @param string $reasonForChange
     * @return self
     */
    public function setReasonForChange($reasonForChange)
    {
        $this->reasonForChange = $reasonForChange;
        return $this;
    }

    /**
     * Gets as sourceID
     *
     * @return string
     */
    public function getSourceID()
    {
        return $this->sourceID;
    }

    /**
     * Sets a new sourceID
     *
     * @param string $sourceID
     * @return self
     */
    public function setSourceID($sourceID)
    {
        $this->sourceID = $sourceID;
        return $this;
    }


}

