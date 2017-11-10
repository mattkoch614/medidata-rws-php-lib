<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingDictionaryLevelDefType
 *
 *
 * XSD Type: mdsol-CodingDictionaryLevelDef
 */
class MdsolCodingDictionaryLevelDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $default
     */
    private $default = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentDef[]
     * $dictionaryLevelComponentDef
     */
    private $dictionaryLevelComponentDef = array(
        
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
     * Gets as default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param string $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Adds as dictionaryLevelComponentDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentDef
     * $dictionaryLevelComponentDef
     */
    public function addToDictionaryLevelComponentDef(\Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentDef $dictionaryLevelComponentDef)
    {
        $this->dictionaryLevelComponentDef[] = $dictionaryLevelComponentDef;
        return $this;
    }

    /**
     * isset dictionaryLevelComponentDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDictionaryLevelComponentDef($index)
    {
        return isset($this->dictionaryLevelComponentDef[$index]);
    }

    /**
     * unset dictionaryLevelComponentDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDictionaryLevelComponentDef($index)
    {
        unset($this->dictionaryLevelComponentDef[$index]);
    }

    /**
     * Gets as dictionaryLevelComponentDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentDef[]
     */
    public function getDictionaryLevelComponentDef()
    {
        return $this->dictionaryLevelComponentDef;
    }

    /**
     * Sets a new dictionaryLevelComponentDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelComponentDef[]
     * $dictionaryLevelComponentDef
     * @return self
     */
    public function setDictionaryLevelComponentDef(array $dictionaryLevelComponentDef)
    {
        $this->dictionaryLevelComponentDef = $dictionaryLevelComponentDef;
        return $this;
    }


}

