<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingDictionaryDefType
 *
 *
 * XSD Type: mdsol-CodingDictionaryDef
 */
class MdsolCodingDictionaryDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryLevelDef[]
     * $codingDictionaryLevelDef
     */
    private $codingDictionaryLevelDef = array(
        
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
     * Adds as codingDictionaryLevelDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryLevelDef
     * $codingDictionaryLevelDef
     */
    public function addToCodingDictionaryLevelDef(\Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryLevelDef $codingDictionaryLevelDef)
    {
        $this->codingDictionaryLevelDef[] = $codingDictionaryLevelDef;
        return $this;
    }

    /**
     * isset codingDictionaryLevelDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodingDictionaryLevelDef($index)
    {
        return isset($this->codingDictionaryLevelDef[$index]);
    }

    /**
     * unset codingDictionaryLevelDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodingDictionaryLevelDef($index)
    {
        unset($this->codingDictionaryLevelDef[$index]);
    }

    /**
     * Gets as codingDictionaryLevelDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryLevelDef[]
     */
    public function getCodingDictionaryLevelDef()
    {
        return $this->codingDictionaryLevelDef;
    }

    /**
     * Sets a new codingDictionaryLevelDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryLevelDef[]
     * $codingDictionaryLevelDef
     * @return self
     */
    public function setCodingDictionaryLevelDef(array $codingDictionaryLevelDef)
    {
        $this->codingDictionaryLevelDef = $codingDictionaryLevelDef;
        return $this;
    }


}

