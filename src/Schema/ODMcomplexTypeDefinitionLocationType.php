<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionLocationType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Location
 */
class ODMcomplexTypeDefinitionLocationType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $locationType
     */
    private $locationType = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\MetaDataVersionRef[] $metaDataVersionRef
     */
    private $metaDataVersionRef = array(
        
    );

    /**
     * Gets as oID
     *
     * @return string
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * Sets a new oID
     *
     * @param string $oID
     * @return self
     */
    public function setOID($oID)
    {
        $this->oID = $oID;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * Sets a new locationType
     *
     * @param string $locationType
     * @return self
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * Adds as metaDataVersionRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\MetaDataVersionRef $metaDataVersionRef
     */
    public function addToMetaDataVersionRef(\Medidata\RwsPhp\Schema\ODM\MetaDataVersionRef $metaDataVersionRef)
    {
        $this->metaDataVersionRef[] = $metaDataVersionRef;
        return $this;
    }

    /**
     * isset metaDataVersionRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMetaDataVersionRef($index)
    {
        return isset($this->metaDataVersionRef[$index]);
    }

    /**
     * unset metaDataVersionRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMetaDataVersionRef($index)
    {
        unset($this->metaDataVersionRef[$index]);
    }

    /**
     * Gets as metaDataVersionRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\MetaDataVersionRef[]
     */
    public function getMetaDataVersionRef()
    {
        return $this->metaDataVersionRef;
    }

    /**
     * Sets a new metaDataVersionRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\MetaDataVersionRef[] $metaDataVersionRef
     * @return self
     */
    public function setMetaDataVersionRef(array $metaDataVersionRef)
    {
        $this->metaDataVersionRef = $metaDataVersionRef;
        return $this;
    }


}

