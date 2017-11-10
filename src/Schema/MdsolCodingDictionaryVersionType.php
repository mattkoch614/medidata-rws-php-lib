<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingDictionaryVersionType
 *
 *
 * XSD Type: mdsol-CodingDictionaryVersion
 */
class MdsolCodingDictionaryVersionType
{

    /**
     * @property string $oID
     */
    private $oID = null;

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


}

