<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolDictionaryLevelComponentRefType
 *
 *
 * XSD Type: mdsol-DictionaryLevelComponentRef
 */
class MdsolDictionaryLevelComponentRefType
{

    /**
     * @property string $dictionaryLevelComponentOID
     */
    private $dictionaryLevelComponentOID = null;

    /**
     * @property string $itemRef
     */
    private $itemRef = null;

    /**
     * Gets as dictionaryLevelComponentOID
     *
     * @return string
     */
    public function getDictionaryLevelComponentOID()
    {
        return $this->dictionaryLevelComponentOID;
    }

    /**
     * Sets a new dictionaryLevelComponentOID
     *
     * @param string $dictionaryLevelComponentOID
     * @return self
     */
    public function setDictionaryLevelComponentOID($dictionaryLevelComponentOID)
    {
        $this->dictionaryLevelComponentOID = $dictionaryLevelComponentOID;
        return $this;
    }

    /**
     * Gets as itemRef
     *
     * @return string
     */
    public function getItemRef()
    {
        return $this->itemRef;
    }

    /**
     * Sets a new itemRef
     *
     * @param string $itemRef
     * @return self
     */
    public function setItemRef($itemRef)
    {
        $this->itemRef = $itemRef;
        return $this;
    }


}

