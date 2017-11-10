<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionFormDataType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-FormData
 */
class ODMcomplexTypeDefinitionFormDataType
{

    /**
     * @property string $formOID
     */
    private $formOID = null;

    /**
     * @property string $formRepeatKey
     */
    private $formRepeatKey = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     */
    private $auditRecord = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Signature $signature
     */
    private $signature = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ArchiveLayoutRef $archiveLayoutRef
     */
    private $archiveLayoutRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     */
    private $annotation = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemGroupData[] $itemGroupData
     */
    private $itemGroupData = array(
        
    );

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
     * Gets as formRepeatKey
     *
     * @return string
     */
    public function getFormRepeatKey()
    {
        return $this->formRepeatKey;
    }

    /**
     * Sets a new formRepeatKey
     *
     * @param string $formRepeatKey
     * @return self
     */
    public function setFormRepeatKey($formRepeatKey)
    {
        $this->formRepeatKey = $formRepeatKey;
        return $this;
    }

    /**
     * Gets as transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Sets a new transactionType
     *
     * @param string $transactionType
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * Gets as auditRecord
     *
     * @return \Medidata\RwsPhp\Schema\ODM\AuditRecord
     */
    public function getAuditRecord()
    {
        return $this->auditRecord;
    }

    /**
     * Sets a new auditRecord
     *
     * @param \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     * @return self
     */
    public function setAuditRecord(\Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord)
    {
        $this->auditRecord = $auditRecord;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Signature $signature
     * @return self
     */
    public function setSignature(\Medidata\RwsPhp\Schema\ODM\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as archiveLayoutRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ArchiveLayoutRef
     */
    public function getArchiveLayoutRef()
    {
        return $this->archiveLayoutRef;
    }

    /**
     * Sets a new archiveLayoutRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ArchiveLayoutRef $archiveLayoutRef
     * @return self
     */
    public function setArchiveLayoutRef(\Medidata\RwsPhp\Schema\ODM\ArchiveLayoutRef $archiveLayoutRef)
    {
        $this->archiveLayoutRef = $archiveLayoutRef;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation $annotation
     */
    public function addToAnnotation(\Medidata\RwsPhp\Schema\ODM\Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
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


}

