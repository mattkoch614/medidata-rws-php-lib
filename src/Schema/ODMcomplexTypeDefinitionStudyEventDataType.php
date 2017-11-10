<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionStudyEventDataType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-StudyEventData
 */
class ODMcomplexTypeDefinitionStudyEventDataType
{

    /**
     * @property string $studyEventOID
     */
    private $studyEventOID = null;

    /**
     * @property string $studyEventRepeatKey
     */
    private $studyEventRepeatKey = null;

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
     * @property \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     */
    private $annotation = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\FormData[] $formData
     */
    private $formData = array(
        
    );

    /**
     * Gets as studyEventOID
     *
     * @return string
     */
    public function getStudyEventOID()
    {
        return $this->studyEventOID;
    }

    /**
     * Sets a new studyEventOID
     *
     * @param string $studyEventOID
     * @return self
     */
    public function setStudyEventOID($studyEventOID)
    {
        $this->studyEventOID = $studyEventOID;
        return $this;
    }

    /**
     * Gets as studyEventRepeatKey
     *
     * @return string
     */
    public function getStudyEventRepeatKey()
    {
        return $this->studyEventRepeatKey;
    }

    /**
     * Sets a new studyEventRepeatKey
     *
     * @param string $studyEventRepeatKey
     * @return self
     */
    public function setStudyEventRepeatKey($studyEventRepeatKey)
    {
        $this->studyEventRepeatKey = $studyEventRepeatKey;
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
     * Adds as formData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\FormData $formData
     */
    public function addToFormData(\Medidata\RwsPhp\Schema\ODM\FormData $formData)
    {
        $this->formData[] = $formData;
        return $this;
    }

    /**
     * isset formData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormData($index)
    {
        return isset($this->formData[$index]);
    }

    /**
     * unset formData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormData($index)
    {
        unset($this->formData[$index]);
    }

    /**
     * Gets as formData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FormData[]
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * Sets a new formData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FormData[] $formData
     * @return self
     */
    public function setFormData(array $formData)
    {
        $this->formData = $formData;
        return $this;
    }


}

