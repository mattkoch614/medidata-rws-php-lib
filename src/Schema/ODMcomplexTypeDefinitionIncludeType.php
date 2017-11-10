<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionIncludeType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Include
 */
class ODMcomplexTypeDefinitionIncludeType
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


}

