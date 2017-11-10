<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolProtocolDeviationType
 *
 *
 * XSD Type: mdsol-ProtocolDeviation
 */
class MdsolProtocolDeviationType
{

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $class
     */
    private $class = null;

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property integer $protocolDeviationRepeatKey
     */
    private $protocolDeviationRepeatKey = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

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
     * Gets as class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * @param string $class
     * @return self
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as protocolDeviationRepeatKey
     *
     * @return integer
     */
    public function getProtocolDeviationRepeatKey()
    {
        return $this->protocolDeviationRepeatKey;
    }

    /**
     * Sets a new protocolDeviationRepeatKey
     *
     * @param integer $protocolDeviationRepeatKey
     * @return self
     */
    public function setProtocolDeviationRepeatKey($protocolDeviationRepeatKey)
    {
        $this->protocolDeviationRepeatKey = $protocolDeviationRepeatKey;
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


}

