<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionAssociationType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Association
 */
class ODMcomplexTypeDefinitionAssociationType
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
     * @property \Medidata\RwsPhp\Schema\ODM\KeySet $keySet
     */
    private $keySet = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Annotation $annotation
     */
    private $annotation = null;

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
     * Gets as keySet
     *
     * @return \Medidata\RwsPhp\Schema\ODM\KeySet
     */
    public function getKeySet()
    {
        return $this->keySet;
    }

    /**
     * Sets a new keySet
     *
     * @param \Medidata\RwsPhp\Schema\ODM\KeySet $keySet
     * @return self
     */
    public function setKeySet(\Medidata\RwsPhp\Schema\ODM\KeySet $keySet)
    {
        $this->keySet = $keySet;
        return $this;
    }

    /**
     * Gets as annotation
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Annotation
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation $annotation
     * @return self
     */
    public function setAnnotation(\Medidata\RwsPhp\Schema\ODM\Annotation $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }


}

