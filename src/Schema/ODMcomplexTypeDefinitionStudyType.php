<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionStudyType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Study
 */
class ODMcomplexTypeDefinitionStudyType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\GlobalVariables $globalVariables
     */
    private $globalVariables = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\BasicDefinitions $basicDefinitions
     */
    private $basicDefinitions = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\MetaDataVersion[] $metaDataVersion
     */
    private $metaDataVersion = array(
        
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
     * Gets as globalVariables
     *
     * @return \Medidata\RwsPhp\Schema\ODM\GlobalVariables
     */
    public function getGlobalVariables()
    {
        return $this->globalVariables;
    }

    /**
     * Sets a new globalVariables
     *
     * @param \Medidata\RwsPhp\Schema\ODM\GlobalVariables $globalVariables
     * @return self
     */
    public function setGlobalVariables(\Medidata\RwsPhp\Schema\ODM\GlobalVariables $globalVariables)
    {
        $this->globalVariables = $globalVariables;
        return $this;
    }

    /**
     * Gets as basicDefinitions
     *
     * @return \Medidata\RwsPhp\Schema\ODM\BasicDefinitions
     */
    public function getBasicDefinitions()
    {
        return $this->basicDefinitions;
    }

    /**
     * Sets a new basicDefinitions
     *
     * @param \Medidata\RwsPhp\Schema\ODM\BasicDefinitions $basicDefinitions
     * @return self
     */
    public function setBasicDefinitions(\Medidata\RwsPhp\Schema\ODM\BasicDefinitions $basicDefinitions)
    {
        $this->basicDefinitions = $basicDefinitions;
        return $this;
    }

    /**
     * Adds as metaDataVersion
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\MetaDataVersion $metaDataVersion
     */
    public function addToMetaDataVersion(\Medidata\RwsPhp\Schema\ODM\MetaDataVersion $metaDataVersion)
    {
        $this->metaDataVersion[] = $metaDataVersion;
        return $this;
    }

    /**
     * isset metaDataVersion
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMetaDataVersion($index)
    {
        return isset($this->metaDataVersion[$index]);
    }

    /**
     * unset metaDataVersion
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMetaDataVersion($index)
    {
        unset($this->metaDataVersion[$index]);
    }

    /**
     * Gets as metaDataVersion
     *
     * @return \Medidata\RwsPhp\Schema\ODM\MetaDataVersion[]
     */
    public function getMetaDataVersion()
    {
        return $this->metaDataVersion;
    }

    /**
     * Sets a new metaDataVersion
     *
     * @param \Medidata\RwsPhp\Schema\ODM\MetaDataVersion[] $metaDataVersion
     * @return self
     */
    public function setMetaDataVersion(array $metaDataVersion)
    {
        $this->metaDataVersion = $metaDataVersion;
        return $this;
    }


}

