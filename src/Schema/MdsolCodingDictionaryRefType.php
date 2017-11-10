<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingDictionaryRefType
 *
 *
 * XSD Type: mdsol-CodingDictionaryRef
 */
class MdsolCodingDictionaryRefType
{

    /**
     * @property string $codingDictionaryOID
     */
    private $codingDictionaryOID = null;

    /**
     * Gets as codingDictionaryOID
     *
     * @return string
     */
    public function getCodingDictionaryOID()
    {
        return $this->codingDictionaryOID;
    }

    /**
     * Sets a new codingDictionaryOID
     *
     * @param string $codingDictionaryOID
     * @return self
     */
    public function setCodingDictionaryOID($codingDictionaryOID)
    {
        $this->codingDictionaryOID = $codingDictionaryOID;
        return $this;
    }


}

