<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolLabDataType
 *
 *
 * XSD Type: mdsol-LabData
 */
class MdsolLabDataType
{

    /**
     * @property integer $low
     */
    private $low = null;

    /**
     * @property integer $high
     */
    private $high = null;

    /**
     * @property string $units
     */
    private $units = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * Gets as low
     *
     * @return integer
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Sets a new low
     *
     * @param integer $low
     * @return self
     */
    public function setLow($low)
    {
        $this->low = $low;
        return $this;
    }

    /**
     * Gets as high
     *
     * @return integer
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Sets a new high
     *
     * @param integer $high
     * @return self
     */
    public function setHigh($high)
    {
        $this->high = $high;
        return $this;
    }

    /**
     * Gets as units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * @param string $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;
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

