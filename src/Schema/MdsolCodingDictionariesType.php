<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingDictionariesType
 *
 *
 * XSD Type: mdsol-CodingDictionaries
 */
class MdsolCodingDictionariesType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryDef[]
     * $codingDictionaryDef
     */
    private $codingDictionaryDef = array(
        
    );

    /**
     * Adds as codingDictionaryDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryDef
     * $codingDictionaryDef
     */
    public function addToCodingDictionaryDef(\Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryDef $codingDictionaryDef)
    {
        $this->codingDictionaryDef[] = $codingDictionaryDef;
        return $this;
    }

    /**
     * isset codingDictionaryDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodingDictionaryDef($index)
    {
        return isset($this->codingDictionaryDef[$index]);
    }

    /**
     * unset codingDictionaryDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodingDictionaryDef($index)
    {
        unset($this->codingDictionaryDef[$index]);
    }

    /**
     * Gets as codingDictionaryDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryDef[]
     */
    public function getCodingDictionaryDef()
    {
        return $this->codingDictionaryDef;
    }

    /**
     * Sets a new codingDictionaryDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingDictionaryDef[]
     * $codingDictionaryDef
     * @return self
     */
    public function setCodingDictionaryDef(array $codingDictionaryDef)
    {
        $this->codingDictionaryDef = $codingDictionaryDef;
        return $this;
    }


}

