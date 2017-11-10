<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolQueryType
 *
 *
 * XSD Type: mdsol-Query
 */
class MdsolQueryType
{

    /**
     * @property string $recipient
     */
    private $recipient = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property float $queryRepeatKey
     */
    private $queryRepeatKey = null;

    /**
     * @property string $requiresResponse
     */
    private $requiresResponse = null;

    /**
     * @property string $response
     */
    private $response = null;

    /**
     * @property float $precedingQueryRepeatKey
     */
    private $precedingQueryRepeatKey = null;

    /**
     * @property string $username
     */
    private $username = null;

    /**
     * @property string $dateTime
     */
    private $dateTime = null;

    /**
     * @property string $cancelURI
     */
    private $cancelURI = null;

    /**
     * @property string $cancelVERB
     */
    private $cancelVERB = null;

    /**
     * @property string $uUID
     */
    private $uUID = null;

    /**
     * @property string $coderUsername
     */
    private $coderUsername = null;

    /**
     * @property string $codingDictionaryVersion
     */
    private $codingDictionaryVersion = null;

    /**
     * Gets as recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * @param string $recipient
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as queryRepeatKey
     *
     * @return float
     */
    public function getQueryRepeatKey()
    {
        return $this->queryRepeatKey;
    }

    /**
     * Sets a new queryRepeatKey
     *
     * @param float $queryRepeatKey
     * @return self
     */
    public function setQueryRepeatKey($queryRepeatKey)
    {
        $this->queryRepeatKey = $queryRepeatKey;
        return $this;
    }

    /**
     * Gets as requiresResponse
     *
     * @return string
     */
    public function getRequiresResponse()
    {
        return $this->requiresResponse;
    }

    /**
     * Sets a new requiresResponse
     *
     * @param string $requiresResponse
     * @return self
     */
    public function setRequiresResponse($requiresResponse)
    {
        $this->requiresResponse = $requiresResponse;
        return $this;
    }

    /**
     * Gets as response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param string $response
     * @return self
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as precedingQueryRepeatKey
     *
     * @return float
     */
    public function getPrecedingQueryRepeatKey()
    {
        return $this->precedingQueryRepeatKey;
    }

    /**
     * Sets a new precedingQueryRepeatKey
     *
     * @param float $precedingQueryRepeatKey
     * @return self
     */
    public function setPrecedingQueryRepeatKey($precedingQueryRepeatKey)
    {
        $this->precedingQueryRepeatKey = $precedingQueryRepeatKey;
        return $this;
    }

    /**
     * Gets as username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a new username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * @param string $dateTime
     * @return self
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Gets as cancelURI
     *
     * @return string
     */
    public function getCancelURI()
    {
        return $this->cancelURI;
    }

    /**
     * Sets a new cancelURI
     *
     * @param string $cancelURI
     * @return self
     */
    public function setCancelURI($cancelURI)
    {
        $this->cancelURI = $cancelURI;
        return $this;
    }

    /**
     * Gets as cancelVERB
     *
     * @return string
     */
    public function getCancelVERB()
    {
        return $this->cancelVERB;
    }

    /**
     * Sets a new cancelVERB
     *
     * @param string $cancelVERB
     * @return self
     */
    public function setCancelVERB($cancelVERB)
    {
        $this->cancelVERB = $cancelVERB;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * @return string
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * @param string $uUID
     * @return self
     */
    public function setUUID($uUID)
    {
        $this->uUID = $uUID;
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


}

