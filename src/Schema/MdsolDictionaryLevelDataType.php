<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolDictionaryLevelDataType
 *
 *
 * XSD Type: mdsol-DictionaryLevelData
 */
class MdsolDictionaryLevelDataType
{

    /**
     * @property string $dictionaryLevelOID
     */
    private $dictionaryLevelOID = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * @property string $term
     */
    private $term = null;

    /**
     * Gets as dictionaryLevelOID
     *
     * @return string
     */
    public function getDictionaryLevelOID()
    {
        return $this->dictionaryLevelOID;
    }

    /**
     * Sets a new dictionaryLevelOID
     *
     * @param string $dictionaryLevelOID
     * @return self
     */
    public function setDictionaryLevelOID($dictionaryLevelOID)
    {
        $this->dictionaryLevelOID = $dictionaryLevelOID;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * @param string $term
     * @return self
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }


}

