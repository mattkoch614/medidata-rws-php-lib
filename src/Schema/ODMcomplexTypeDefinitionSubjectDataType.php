<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionSubjectDataType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-SubjectData
 */
class ODMcomplexTypeDefinitionSubjectDataType
{

    /**
     * @property string $subjectKey
     */
    private $subjectKey = null;

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
     * @property \Medidata\RwsPhp\Schema\ODM\InvestigatorRef $investigatorRef
     */
    private $investigatorRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\SiteRef $siteRef
     */
    private $siteRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     */
    private $annotation = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\StudyEventData[] $studyEventData
     */
    private $studyEventData = array(
        
    );

    /**
     * Gets as subjectKey
     *
     * @return string
     */
    public function getSubjectKey()
    {
        return $this->subjectKey;
    }

    /**
     * Sets a new subjectKey
     *
     * @param string $subjectKey
     * @return self
     */
    public function setSubjectKey($subjectKey)
    {
        $this->subjectKey = $subjectKey;
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
     * Gets as investigatorRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\InvestigatorRef
     */
    public function getInvestigatorRef()
    {
        return $this->investigatorRef;
    }

    /**
     * Sets a new investigatorRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\InvestigatorRef $investigatorRef
     * @return self
     */
    public function setInvestigatorRef(\Medidata\RwsPhp\Schema\ODM\InvestigatorRef $investigatorRef)
    {
        $this->investigatorRef = $investigatorRef;
        return $this;
    }

    /**
     * Gets as siteRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\SiteRef
     */
    public function getSiteRef()
    {
        return $this->siteRef;
    }

    /**
     * Sets a new siteRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\SiteRef $siteRef
     * @return self
     */
    public function setSiteRef(\Medidata\RwsPhp\Schema\ODM\SiteRef $siteRef)
    {
        $this->siteRef = $siteRef;
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
     * Adds as studyEventData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventData $studyEventData
     */
    public function addToStudyEventData(\Medidata\RwsPhp\Schema\ODM\StudyEventData $studyEventData)
    {
        $this->studyEventData[] = $studyEventData;
        return $this;
    }

    /**
     * isset studyEventData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudyEventData($index)
    {
        return isset($this->studyEventData[$index]);
    }

    /**
     * unset studyEventData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudyEventData($index)
    {
        unset($this->studyEventData[$index]);
    }

    /**
     * Gets as studyEventData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\StudyEventData[]
     */
    public function getStudyEventData()
    {
        return $this->studyEventData;
    }

    /**
     * Sets a new studyEventData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventData[] $studyEventData
     * @return self
     */
    public function setStudyEventData(array $studyEventData)
    {
        $this->studyEventData = $studyEventData;
        return $this;
    }


}

