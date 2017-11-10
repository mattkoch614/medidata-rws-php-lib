<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingRequestDefType
 *
 *
 * XSD Type: mdsol-CodingRequestDef
 */
class MdsolCodingRequestDefType
{

    /**
     * @property string $codingWorkflowOID
     */
    private $codingWorkflowOID = null;

    /**
     * @property string $codingDictionaryLevelOID
     */
    private $codingDictionaryLevelOID = null;

    /**
     * @property string $codingDictionaryOID
     */
    private $codingDictionaryOID = null;

    /**
     * @property string $codingPriority
     */
    private $codingPriority = null;

    /**
     * @property string $codingLocale
     */
    private $codingLocale = null;

    /**
     * @property string $codingApprovalType
     */
    private $codingApprovalType = null;

    /**
     * @property string $codingDictionaryVersion
     */
    private $codingDictionaryVersion = null;

    /**
     * @property string $codingModeType
     */
    private $codingModeType = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentRef[]
     * $dictionaryLevelComponentRef
     */
    private $dictionaryLevelComponentRef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\SupplementalRef[] $supplementalRef
     */
    private $supplementalRef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData[]
     * $codingWorkflowData
     */
    private $codingWorkflowData = array(
        
    );

    /**
     * Gets as codingWorkflowOID
     *
     * @return string
     */
    public function getCodingWorkflowOID()
    {
        return $this->codingWorkflowOID;
    }

    /**
     * Sets a new codingWorkflowOID
     *
     * @param string $codingWorkflowOID
     * @return self
     */
    public function setCodingWorkflowOID($codingWorkflowOID)
    {
        $this->codingWorkflowOID = $codingWorkflowOID;
        return $this;
    }

    /**
     * Gets as codingDictionaryLevelOID
     *
     * @return string
     */
    public function getCodingDictionaryLevelOID()
    {
        return $this->codingDictionaryLevelOID;
    }

    /**
     * Sets a new codingDictionaryLevelOID
     *
     * @param string $codingDictionaryLevelOID
     * @return self
     */
    public function setCodingDictionaryLevelOID($codingDictionaryLevelOID)
    {
        $this->codingDictionaryLevelOID = $codingDictionaryLevelOID;
        return $this;
    }

    /**
     * Gets as codingDictionaryOID
     *
     * @return string
     */
    public function getCodingDictionaryOID()
    {
        return $this->codingDictionaryOID;
    }

    /**
     * Sets a new codingDictionaryOID
     *
     * @param string $codingDictionaryOID
     * @return self
     */
    public function setCodingDictionaryOID($codingDictionaryOID)
    {
        $this->codingDictionaryOID = $codingDictionaryOID;
        return $this;
    }

    /**
     * Gets as codingPriority
     *
     * @return string
     */
    public function getCodingPriority()
    {
        return $this->codingPriority;
    }

    /**
     * Sets a new codingPriority
     *
     * @param string $codingPriority
     * @return self
     */
    public function setCodingPriority($codingPriority)
    {
        $this->codingPriority = $codingPriority;
        return $this;
    }

    /**
     * Gets as codingLocale
     *
     * @return string
     */
    public function getCodingLocale()
    {
        return $this->codingLocale;
    }

    /**
     * Sets a new codingLocale
     *
     * @param string $codingLocale
     * @return self
     */
    public function setCodingLocale($codingLocale)
    {
        $this->codingLocale = $codingLocale;
        return $this;
    }

    /**
     * Gets as codingApprovalType
     *
     * @return string
     */
    public function getCodingApprovalType()
    {
        return $this->codingApprovalType;
    }

    /**
     * Sets a new codingApprovalType
     *
     * @param string $codingApprovalType
     * @return self
     */
    public function setCodingApprovalType($codingApprovalType)
    {
        $this->codingApprovalType = $codingApprovalType;
        return $this;
    }

    /**
     * Gets as codingDictionaryVersion
     *
     * @return string
     */
    public function getCodingDictionaryVersion()
    {
        return $this->codingDictionaryVersion;
    }

    /**
     * Sets a new codingDictionaryVersion
     *
     * @param string $codingDictionaryVersion
     * @return self
     */
    public function setCodingDictionaryVersion($codingDictionaryVersion)
    {
        $this->codingDictionaryVersion = $codingDictionaryVersion;
        return $this;
    }

    /**
     * Gets as codingModeType
     *
     * @return string
     */
    public function getCodingModeType()
    {
        return $this->codingModeType;
    }

    /**
     * Sets a new codingModeType
     *
     * @param string $codingModeType
     * @return self
     */
    public function setCodingModeType($codingModeType)
    {
        $this->codingModeType = $codingModeType;
        return $this;
    }

    /**
     * Adds as dictionaryLevelComponentRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentRef
     * $dictionaryLevelComponentRef
     */
    public function addToDictionaryLevelComponentRef(\Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentRef $dictionaryLevelComponentRef)
    {
        $this->dictionaryLevelComponentRef[] = $dictionaryLevelComponentRef;
        return $this;
    }

    /**
     * isset dictionaryLevelComponentRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDictionaryLevelComponentRef($index)
    {
        return isset($this->dictionaryLevelComponentRef[$index]);
    }

    /**
     * unset dictionaryLevelComponentRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDictionaryLevelComponentRef($index)
    {
        unset($this->dictionaryLevelComponentRef[$index]);
    }

    /**
     * Gets as dictionaryLevelComponentRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentRef[]
     */
    public function getDictionaryLevelComponentRef()
    {
        return $this->dictionaryLevelComponentRef;
    }

    /**
     * Sets a new dictionaryLevelComponentRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentRef[]
     * $dictionaryLevelComponentRef
     * @return self
     */
    public function setDictionaryLevelComponentRef(array $dictionaryLevelComponentRef)
    {
        $this->dictionaryLevelComponentRef = $dictionaryLevelComponentRef;
        return $this;
    }

    /**
     * Adds as supplementalRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\SupplementalRef $supplementalRef
     */
    public function addToSupplementalRef(\Medidata\RwsPhp\Schema\ODM\mdsol\SupplementalRef $supplementalRef)
    {
        $this->supplementalRef[] = $supplementalRef;
        return $this;
    }

    /**
     * isset supplementalRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplementalRef($index)
    {
        return isset($this->supplementalRef[$index]);
    }

    /**
     * unset supplementalRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplementalRef($index)
    {
        unset($this->supplementalRef[$index]);
    }

    /**
     * Gets as supplementalRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\SupplementalRef[]
     */
    public function getSupplementalRef()
    {
        return $this->supplementalRef;
    }

    /**
     * Sets a new supplementalRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\SupplementalRef[] $supplementalRef
     * @return self
     */
    public function setSupplementalRef(array $supplementalRef)
    {
        $this->supplementalRef = $supplementalRef;
        return $this;
    }

    /**
     * Adds as codingWorkflowData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData $codingWorkflowData
     */
    public function addToCodingWorkflowData(\Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData $codingWorkflowData)
    {
        $this->codingWorkflowData[] = $codingWorkflowData;
        return $this;
    }

    /**
     * isset codingWorkflowData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodingWorkflowData($index)
    {
        return isset($this->codingWorkflowData[$index]);
    }

    /**
     * unset codingWorkflowData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodingWorkflowData($index)
    {
        unset($this->codingWorkflowData[$index]);
    }

    /**
     * Gets as codingWorkflowData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData[]
     */
    public function getCodingWorkflowData()
    {
        return $this->codingWorkflowData;
    }

    /**
     * Sets a new codingWorkflowData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData[]
     * $codingWorkflowData
     * @return self
     */
    public function setCodingWorkflowData(array $codingWorkflowData)
    {
        $this->codingWorkflowData = $codingWorkflowData;
        return $this;
    }


}

