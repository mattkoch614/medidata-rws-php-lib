<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingDataType
 *
 *
 * XSD Type: mdsol-CodingData
 */
class MdsolCodingDataType
{

    /**
     * @property string $codingDictionaryOID
     */
    private $codingDictionaryOID = null;

    /**
     * @property string $codingDictionaryVersion
     */
    private $codingDictionaryVersion = null;

    /**
     * @property string $coderUsername
     */
    private $coderUsername = null;

    /**
     * @property \DateTime $dateTimeStamp
     */
    private $dateTimeStamp = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property string $codingMode
     */
    private $codingMode = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelData[]
     * $dictionaryLevelData
     */
    private $dictionaryLevelData = array(
        
    );

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

    /**
     * Gets as codingDictionaryVersion
     *
     * @return string
     */
    public function getCodingDictionaryVersion()
    {
        return $this->codingDictionaryVersion;
    }

    /**
     * Sets a new codingDictionaryVersion
     *
     * @param string $codingDictionaryVersion
     * @return self
     */
    public function setCodingDictionaryVersion($codingDictionaryVersion)
    {
        $this->codingDictionaryVersion = $codingDictionaryVersion;
        return $this;
    }

    /**
     * Gets as coderUsername
     *
     * @return string
     */
    public function getCoderUsername()
    {
        return $this->coderUsername;
    }

    /**
     * Sets a new coderUsername
     *
     * @param string $coderUsername
     * @return self
     */
    public function setCoderUsername($coderUsername)
    {
        $this->coderUsername = $coderUsername;
        return $this;
    }

    /**
     * Gets as dateTimeStamp
     *
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * Sets a new dateTimeStamp
     *
     * @param \DateTime $dateTimeStamp
     * @return self
     */
    public function setDateTimeStamp(\DateTime $dateTimeStamp)
    {
        $this->dateTimeStamp = $dateTimeStamp;
        return $this;
    }

    /**
     * Gets as transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Sets a new transactionType
     *
     * @param string $transactionType
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * Gets as codingMode
     *
     * @return string
     */
    public function getCodingMode()
    {
        return $this->codingMode;
    }

    /**
     * Sets a new codingMode
     *
     * @param string $codingMode
     * @return self
     */
    public function setCodingMode($codingMode)
    {
        $this->codingMode = $codingMode;
        return $this;
    }

    /**
     * Adds as dictionaryLevelData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelData
     * $dictionaryLevelData
     */
    public function addToDictionaryLevelData(\Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelData $dictionaryLevelData)
    {
        $this->dictionaryLevelData[] = $dictionaryLevelData;
        return $this;
    }

    /**
     * isset dictionaryLevelData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDictionaryLevelData($index)
    {
        return isset($this->dictionaryLevelData[$index]);
    }

    /**
     * unset dictionaryLevelData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDictionaryLevelData($index)
    {
        unset($this->dictionaryLevelData[$index]);
    }

    /**
     * Gets as dictionaryLevelData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelData[]
     */
    public function getDictionaryLevelData()
    {
        return $this->dictionaryLevelData;
    }

    /**
     * Sets a new dictionaryLevelData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\DictionaryLevelData[]
     * $dictionaryLevelData
     * @return self
     */
    public function setDictionaryLevelData(array $dictionaryLevelData)
    {
        $this->dictionaryLevelData = $dictionaryLevelData;
        return $this;
    }


}

