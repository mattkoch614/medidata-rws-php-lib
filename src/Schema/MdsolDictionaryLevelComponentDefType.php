<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolDictionaryLevelComponentDefType
 *
 *
 * XSD Type: mdsol-DictionaryLevelComponentDef
 */
class MdsolDictionaryLevelComponentDefType
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

