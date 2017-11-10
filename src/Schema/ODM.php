<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODM
 */
class ODM
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $fileType
     */
    private $fileType = null;

    /**
     * @property string $granularity
     */
    private $granularity = null;

    /**
     * @property string $archival
     */
    private $archival = null;

    /**
     * @property string $fileOID
     */
    private $fileOID = null;

    /**
     * @property \DateTime $creationDateTime
     */
    private $creationDateTime = null;

    /**
     * @property string $priorFileOID
     */
    private $priorFileOID = null;

    /**
     * @property \DateTime $asOfDateTime
     */
    private $asOfDateTime = null;

    /**
     * @property string $oDMVersion
     */
    private $oDMVersion = null;

    /**
     * @property string $originator
     */
    private $originator = null;

    /**
     * @property string $sourceSystem
     */
    private $sourceSystem = null;

    /**
     * @property string $sourceSystemVersion
     */
    private $sourceSystemVersion = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Study[] $study
     */
    private $study = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\AdminData[] $adminData
     */
    private $adminData = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ReferenceData[] $referenceData
     */
    private $referenceData = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ClinicalData[] $clinicalData
     */
    private $clinicalData = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Association[] $association
     */
    private $association = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\Signature[] $signature
     */
    private $signature = array(
        
    );

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets a new fileType
     *
     * @param string $fileType
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * Gets as granularity
     *
     * @return string
     */
    public function getGranularity()
    {
        return $this->granularity;
    }

    /**
     * Sets a new granularity
     *
     * @param string $granularity
     * @return self
     */
    public function setGranularity($granularity)
    {
        $this->granularity = $granularity;
        return $this;
    }

    /**
     * Gets as archival
     *
     * @return string
     */
    public function getArchival()
    {
        return $this->archival;
    }

    /**
     * Sets a new archival
     *
     * @param string $archival
     * @return self
     */
    public function setArchival($archival)
    {
        $this->archival = $archival;
        return $this;
    }

    /**
     * Gets as fileOID
     *
     * @return string
     */
    public function getFileOID()
    {
        return $this->fileOID;
    }

    /**
     * Sets a new fileOID
     *
     * @param string $fileOID
     * @return self
     */
    public function setFileOID($fileOID)
    {
        $this->fileOID = $fileOID;
        return $this;
    }

    /**
     * Gets as creationDateTime
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->creationDateTime;
    }

    /**
     * Sets a new creationDateTime
     *
     * @param \DateTime $creationDateTime
     * @return self
     */
    public function setCreationDateTime(\DateTime $creationDateTime)
    {
        $this->creationDateTime = $creationDateTime;
        return $this;
    }

    /**
     * Gets as priorFileOID
     *
     * @return string
     */
    public function getPriorFileOID()
    {
        return $this->priorFileOID;
    }

    /**
     * Sets a new priorFileOID
     *
     * @param string $priorFileOID
     * @return self
     */
    public function setPriorFileOID($priorFileOID)
    {
        $this->priorFileOID = $priorFileOID;
        return $this;
    }

    /**
     * Gets as asOfDateTime
     *
     * @return \DateTime
     */
    public function getAsOfDateTime()
    {
        return $this->asOfDateTime;
    }

    /**
     * Sets a new asOfDateTime
     *
     * @param \DateTime $asOfDateTime
     * @return self
     */
    public function setAsOfDateTime(\DateTime $asOfDateTime)
    {
        $this->asOfDateTime = $asOfDateTime;
        return $this;
    }

    /**
     * Gets as oDMVersion
     *
     * @return string
     */
    public function getODMVersion()
    {
        return $this->oDMVersion;
    }

    /**
     * Sets a new oDMVersion
     *
     * @param string $oDMVersion
     * @return self
     */
    public function setODMVersion($oDMVersion)
    {
        $this->oDMVersion = $oDMVersion;
        return $this;
    }

    /**
     * Gets as originator
     *
     * @return string
     */
    public function getOriginator()
    {
        return $this->originator;
    }

    /**
     * Sets a new originator
     *
     * @param string $originator
     * @return self
     */
    public function setOriginator($originator)
    {
        $this->originator = $originator;
        return $this;
    }

    /**
     * Gets as sourceSystem
     *
     * @return string
     */
    public function getSourceSystem()
    {
        return $this->sourceSystem;
    }

    /**
     * Sets a new sourceSystem
     *
     * @param string $sourceSystem
     * @return self
     */
    public function setSourceSystem($sourceSystem)
    {
        $this->sourceSystem = $sourceSystem;
        return $this;
    }

    /**
     * Gets as sourceSystemVersion
     *
     * @return string
     */
    public function getSourceSystemVersion()
    {
        return $this->sourceSystemVersion;
    }

    /**
     * Sets a new sourceSystemVersion
     *
     * @param string $sourceSystemVersion
     * @return self
     */
    public function setSourceSystemVersion($sourceSystemVersion)
    {
        $this->sourceSystemVersion = $sourceSystemVersion;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as study
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Study $study
     */
    public function addToStudy(\Medidata\RwsPhp\Schema\ODM\Study $study)
    {
        $this->study[] = $study;
        return $this;
    }

    /**
     * isset study
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudy($index)
    {
        return isset($this->study[$index]);
    }

    /**
     * unset study
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudy($index)
    {
        unset($this->study[$index]);
    }

    /**
     * Gets as study
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Study[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Sets a new study
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Study[] $study
     * @return self
     */
    public function setStudy(array $study)
    {
        $this->study = $study;
        return $this;
    }

    /**
     * Adds as adminData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\AdminData $adminData
     */
    public function addToAdminData(\Medidata\RwsPhp\Schema\ODM\AdminData $adminData)
    {
        $this->adminData[] = $adminData;
        return $this;
    }

    /**
     * isset adminData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdminData($index)
    {
        return isset($this->adminData[$index]);
    }

    /**
     * unset adminData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdminData($index)
    {
        unset($this->adminData[$index]);
    }

    /**
     * Gets as adminData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\AdminData[]
     */
    public function getAdminData()
    {
        return $this->adminData;
    }

    /**
     * Sets a new adminData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\AdminData[] $adminData
     * @return self
     */
    public function setAdminData(array $adminData)
    {
        $this->adminData = $adminData;
        return $this;
    }

    /**
     * Adds as referenceData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ReferenceData $referenceData
     */
    public function addToReferenceData(\Medidata\RwsPhp\Schema\ODM\ReferenceData $referenceData)
    {
        $this->referenceData[] = $referenceData;
        return $this;
    }

    /**
     * isset referenceData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReferenceData($index)
    {
        return isset($this->referenceData[$index]);
    }

    /**
     * unset referenceData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReferenceData($index)
    {
        unset($this->referenceData[$index]);
    }

    /**
     * Gets as referenceData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ReferenceData[]
     */
    public function getReferenceData()
    {
        return $this->referenceData;
    }

    /**
     * Sets a new referenceData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ReferenceData[] $referenceData
     * @return self
     */
    public function setReferenceData(array $referenceData)
    {
        $this->referenceData = $referenceData;
        return $this;
    }

    /**
     * Adds as clinicalData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ClinicalData $clinicalData
     */
    public function addToClinicalData(\Medidata\RwsPhp\Schema\ODM\ClinicalData $clinicalData)
    {
        $this->clinicalData[] = $clinicalData;
        return $this;
    }

    /**
     * isset clinicalData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClinicalData($index)
    {
        return isset($this->clinicalData[$index]);
    }

    /**
     * unset clinicalData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClinicalData($index)
    {
        unset($this->clinicalData[$index]);
    }

    /**
     * Gets as clinicalData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ClinicalData[]
     */
    public function getClinicalData()
    {
        return $this->clinicalData;
    }

    /**
     * Sets a new clinicalData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ClinicalData[] $clinicalData
     * @return self
     */
    public function setClinicalData(array $clinicalData)
    {
        $this->clinicalData = $clinicalData;
        return $this;
    }

    /**
     * Adds as association
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Association $association
     */
    public function addToAssociation(\Medidata\RwsPhp\Schema\ODM\Association $association)
    {
        $this->association[] = $association;
        return $this;
    }

    /**
     * isset association
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssociation($index)
    {
        return isset($this->association[$index]);
    }

    /**
     * unset association
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssociation($index)
    {
        unset($this->association[$index]);
    }

    /**
     * Gets as association
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Association[]
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Association[] $association
     * @return self
     */
    public function setAssociation(array $association)
    {
        $this->association = $association;
        return $this;
    }

    /**
     * Adds as signature
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\xmldsig\Signature $signature
     */
    public function addToSignature(\Medidata\RwsPhp\Schema\xmldsig\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

