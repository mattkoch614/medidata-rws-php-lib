<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionReferenceDataType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ReferenceData
 */
class ODMcomplexTypeDefinitionReferenceDataType
{

    /**
     * @property string $studyOID
     */
    private $studyOID = null;

    /**
     * @property string $metaDataVersionOID
     */
    private $metaDataVersionOID = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemGroupData[] $itemGroupData
     */
    private $itemGroupData = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\AuditRecord[] $auditRecords
     */
    private $auditRecords = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Signature[] $signatures
     */
    private $signatures = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotations
     */
    private $annotations = null;

    /**
     * Gets as studyOID
     *
     * @return string
     */
    public function getStudyOID()
    {
        return $this->studyOID;
    }

    /**
     * Sets a new studyOID
     *
     * @param string $studyOID
     * @return self
     */
    public function setStudyOID($studyOID)
    {
        $this->studyOID = $studyOID;
        return $this;
    }

    /**
     * Gets as metaDataVersionOID
     *
     * @return string
     */
    public function getMetaDataVersionOID()
    {
        return $this->metaDataVersionOID;
    }

    /**
     * Sets a new metaDataVersionOID
     *
     * @param string $metaDataVersionOID
     * @return self
     */
    public function setMetaDataVersionOID($metaDataVersionOID)
    {
        $this->metaDataVersionOID = $metaDataVersionOID;
        return $this;
    }

    /**
     * Adds as itemGroupData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemGroupData $itemGroupData
     */
    public function addToItemGroupData(\Medidata\RwsPhp\Schema\ODM\ItemGroupData $itemGroupData)
    {
        $this->itemGroupData[] = $itemGroupData;
        return $this;
    }

    /**
     * isset itemGroupData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemGroupData($index)
    {
        return isset($this->itemGroupData[$index]);
    }

    /**
     * unset itemGroupData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemGroupData($index)
    {
        unset($this->itemGroupData[$index]);
    }

    /**
     * Gets as itemGroupData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemGroupData[]
     */
    public function getItemGroupData()
    {
        return $this->itemGroupData;
    }

    /**
     * Sets a new itemGroupData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemGroupData[] $itemGroupData
     * @return self
     */
    public function setItemGroupData(array $itemGroupData)
    {
        $this->itemGroupData = $itemGroupData;
        return $this;
    }

    /**
     * Adds as auditRecord
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     */
    public function addToAuditRecords(\Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord)
    {
        $this->auditRecords[] = $auditRecord;
        return $this;
    }

    /**
     * isset auditRecords
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuditRecords($index)
    {
        return isset($this->auditRecords[$index]);
    }

    /**
     * unset auditRecords
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuditRecords($index)
    {
        unset($this->auditRecords[$index]);
    }

    /**
     * Gets as auditRecords
     *
     * @return \Medidata\RwsPhp\Schema\ODM\AuditRecord[]
     */
    public function getAuditRecords()
    {
        return $this->auditRecords;
    }

    /**
     * Sets a new auditRecords
     *
     * @param \Medidata\RwsPhp\Schema\ODM\AuditRecord[] $auditRecords
     * @return self
     */
    public function setAuditRecords(array $auditRecords)
    {
        $this->auditRecords = $auditRecords;
        return $this;
    }

    /**
     * Adds as signature
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Signature $signature
     */
    public function addToSignatures(\Medidata\RwsPhp\Schema\ODM\Signature $signature)
    {
        $this->signatures[] = $signature;
        return $this;
    }

    /**
     * isset signatures
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSignatures($index)
    {
        return isset($this->signatures[$index]);
    }

    /**
     * unset signatures
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSignatures($index)
    {
        unset($this->signatures[$index]);
    }

    /**
     * Gets as signatures
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Signature[]
     */
    public function getSignatures()
    {
        return $this->signatures;
    }

    /**
     * Sets a new signatures
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Signature[] $signatures
     * @return self
     */
    public function setSignatures(array $signatures)
    {
        $this->signatures = $signatures;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation $annotation
     */
    public function addToAnnotations(\Medidata\RwsPhp\Schema\ODM\Annotation $annotation)
    {
        $this->annotations[] = $annotation;
        return $this;
    }

    /**
     * isset annotations
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotations($index)
    {
        return isset($this->annotations[$index]);
    }

    /**
     * unset annotations
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotations($index)
    {
        unset($this->annotations[$index]);
    }

    /**
     * Gets as annotations
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Annotation[]
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Sets a new annotations
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotations
     * @return self
     */
    public function setAnnotations(array $annotations)
    {
        $this->annotations = $annotations;
        return $this;
    }


}

