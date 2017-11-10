<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionMetaDataVersionRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-MetaDataVersionRef
 */
class ODMcomplexTypeDefinitionMetaDataVersionRefType
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
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

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
     * Gets as effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }


}

