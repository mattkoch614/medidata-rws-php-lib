<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionAuditRecordsType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-AuditRecords
 */
class ODMcomplexTypeDefinitionAuditRecordsType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\AuditRecord[] $auditRecord
     */
    private $auditRecord = array(
        
    );

    /**
     * Adds as auditRecord
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     */
    public function addToAuditRecord(\Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord)
    {
        $this->auditRecord[] = $auditRecord;
        return $this;
    }

    /**
     * isset auditRecord
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuditRecord($index)
    {
        return isset($this->auditRecord[$index]);
    }

    /**
     * unset auditRecord
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuditRecord($index)
    {
        unset($this->auditRecord[$index]);
    }

    /**
     * Gets as auditRecord
     *
     * @return \Medidata\RwsPhp\Schema\ODM\AuditRecord[]
     */
    public function getAuditRecord()
    {
        return $this->auditRecord;
    }

    /**
     * Sets a new auditRecord
     *
     * @param \Medidata\RwsPhp\Schema\ODM\AuditRecord[] $auditRecord
     * @return self
     */
    public function setAuditRecord(array $auditRecord)
    {
        $this->auditRecord = $auditRecord;
        return $this;
    }


}

