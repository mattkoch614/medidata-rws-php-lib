<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolDerivationDefType
 *
 *
 * XSD Type: mdsol-DerivationDef
 */
class MdsolDerivationDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $active
     */
    private $active = null;

    /**
     * @property string $bypassDuringMigration
     */
    private $bypassDuringMigration = null;

    /**
     * @property string $needsRetesting
     */
    private $needsRetesting = null;

    /**
     * @property string $variableOID
     */
    private $variableOID = null;

    /**
     * @property string $folderOID
     */
    private $folderOID = null;

    /**
     * @property string $formOID
     */
    private $formOID = null;

    /**
     * @property string $fieldOID
     */
    private $fieldOID = null;

    /**
     * @property integer $recordPosition
     */
    private $recordPosition = null;

    /**
     * @property string $allVariablesInFolders
     */
    private $allVariablesInFolders = null;

    /**
     * @property string $allVariablesInFields
     */
    private $allVariablesInFields = null;

    /**
     * @property string $logicalRecordPosition
     */
    private $logicalRecordPosition = null;

    /**
     * @property integer $formRepeatNumber
     */
    private $formRepeatNumber = null;

    /**
     * @property integer $folderRepeatNumber
     */
    private $folderRepeatNumber = null;

    /**
     * @property string $copySource
     */
    private $copySource = null;

    /**
     * @property string $retestingReason
     */
    private $retestingReason = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\DerivationStep[] $derivationStep
     */
    private $derivationStep = array(
        
    );

    /**
     * Gets as oID
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
     * @param string $oID
     * @return self
     */
    public function setOID($oID)
    {
        $this->oID = $oID;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param string $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as bypassDuringMigration
     *
     * @return string
     */
    public function getBypassDuringMigration()
    {
        return $this->bypassDuringMigration;
    }

    /**
     * Sets a new bypassDuringMigration
     *
     * @param string $bypassDuringMigration
     * @return self
     */
    public function setBypassDuringMigration($bypassDuringMigration)
    {
        $this->bypassDuringMigration = $bypassDuringMigration;
        return $this;
    }

    /**
     * Gets as needsRetesting
     *
     * @return string
     */
    public function getNeedsRetesting()
    {
        return $this->needsRetesting;
    }

    /**
     * Sets a new needsRetesting
     *
     * @param string $needsRetesting
     * @return self
     */
    public function setNeedsRetesting($needsRetesting)
    {
        $this->needsRetesting = $needsRetesting;
        return $this;
    }

    /**
     * Gets as variableOID
     *
     * @return string
     */
    public function getVariableOID()
    {
        return $this->variableOID;
    }

    /**
     * Sets a new variableOID
     *
     * @param string $variableOID
     * @return self
     */
    public function setVariableOID($variableOID)
    {
        $this->variableOID = $variableOID;
        return $this;
    }

    /**
     * Gets as folderOID
     *
     * @return string
     */
    public function getFolderOID()
    {
        return $this->folderOID;
    }

    /**
     * Sets a new folderOID
     *
     * @param string $folderOID
     * @return self
     */
    public function setFolderOID($folderOID)
    {
        $this->folderOID = $folderOID;
        return $this;
    }

    /**
     * Gets as formOID
     *
     * @return string
     */
    public function getFormOID()
    {
        return $this->formOID;
    }

    /**
     * Sets a new formOID
     *
     * @param string $formOID
     * @return self
     */
    public function setFormOID($formOID)
    {
        $this->formOID = $formOID;
        return $this;
    }

    /**
     * Gets as fieldOID
     *
     * @return string
     */
    public function getFieldOID()
    {
        return $this->fieldOID;
    }

    /**
     * Sets a new fieldOID
     *
     * @param string $fieldOID
     * @return self
     */
    public function setFieldOID($fieldOID)
    {
        $this->fieldOID = $fieldOID;
        return $this;
    }

    /**
     * Gets as recordPosition
     *
     * @return integer
     */
    public function getRecordPosition()
    {
        return $this->recordPosition;
    }

    /**
     * Sets a new recordPosition
     *
     * @param integer $recordPosition
     * @return self
     */
    public function setRecordPosition($recordPosition)
    {
        $this->recordPosition = $recordPosition;
        return $this;
    }

    /**
     * Gets as allVariablesInFolders
     *
     * @return string
     */
    public function getAllVariablesInFolders()
    {
        return $this->allVariablesInFolders;
    }

    /**
     * Sets a new allVariablesInFolders
     *
     * @param string $allVariablesInFolders
     * @return self
     */
    public function setAllVariablesInFolders($allVariablesInFolders)
    {
        $this->allVariablesInFolders = $allVariablesInFolders;
        return $this;
    }

    /**
     * Gets as allVariablesInFields
     *
     * @return string
     */
    public function getAllVariablesInFields()
    {
        return $this->allVariablesInFields;
    }

    /**
     * Sets a new allVariablesInFields
     *
     * @param string $allVariablesInFields
     * @return self
     */
    public function setAllVariablesInFields($allVariablesInFields)
    {
        $this->allVariablesInFields = $allVariablesInFields;
        return $this;
    }

    /**
     * Gets as logicalRecordPosition
     *
     * @return string
     */
    public function getLogicalRecordPosition()
    {
        return $this->logicalRecordPosition;
    }

    /**
     * Sets a new logicalRecordPosition
     *
     * @param string $logicalRecordPosition
     * @return self
     */
    public function setLogicalRecordPosition($logicalRecordPosition)
    {
        $this->logicalRecordPosition = $logicalRecordPosition;
        return $this;
    }

    /**
     * Gets as formRepeatNumber
     *
     * @return integer
     */
    public function getFormRepeatNumber()
    {
        return $this->formRepeatNumber;
    }

    /**
     * Sets a new formRepeatNumber
     *
     * @param integer $formRepeatNumber
     * @return self
     */
    public function setFormRepeatNumber($formRepeatNumber)
    {
        $this->formRepeatNumber = $formRepeatNumber;
        return $this;
    }

    /**
     * Gets as folderRepeatNumber
     *
     * @return integer
     */
    public function getFolderRepeatNumber()
    {
        return $this->folderRepeatNumber;
    }

    /**
     * Sets a new folderRepeatNumber
     *
     * @param integer $folderRepeatNumber
     * @return self
     */
    public function setFolderRepeatNumber($folderRepeatNumber)
    {
        $this->folderRepeatNumber = $folderRepeatNumber;
        return $this;
    }

    /**
     * Gets as copySource
     *
     * @return string
     */
    public function getCopySource()
    {
        return $this->copySource;
    }

    /**
     * Sets a new copySource
     *
     * @param string $copySource
     * @return self
     */
    public function setCopySource($copySource)
    {
        $this->copySource = $copySource;
        return $this;
    }

    /**
     * Gets as retestingReason
     *
     * @return string
     */
    public function getRetestingReason()
    {
        return $this->retestingReason;
    }

    /**
     * Sets a new retestingReason
     *
     * @param string $retestingReason
     * @return self
     */
    public function setRetestingReason($retestingReason)
    {
        $this->retestingReason = $retestingReason;
        return $this;
    }

    /**
     * Adds as derivationStep
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DerivationStep $derivationStep
     */
    public function addToDerivationStep(\Medidata\RwsPhp\Schema\ODM\mdsol\DerivationStep $derivationStep)
    {
        $this->derivationStep[] = $derivationStep;
        return $this;
    }

    /**
     * isset derivationStep
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDerivationStep($index)
    {
        return isset($this->derivationStep[$index]);
    }

    /**
     * unset derivationStep
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDerivationStep($index)
    {
        unset($this->derivationStep[$index]);
    }

    /**
     * Gets as derivationStep
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\DerivationStep[]
     */
    public function getDerivationStep()
    {
        return $this->derivationStep;
    }

    /**
     * Sets a new derivationStep
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DerivationStep[] $derivationStep
     * @return self
     */
    public function setDerivationStep(array $derivationStep)
    {
        $this->derivationStep = $derivationStep;
        return $this;
    }


}

