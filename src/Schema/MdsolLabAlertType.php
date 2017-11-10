<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolLabAlertType
 *
 *
 * XSD Type: mdsol-LabAlert
 */
class MdsolLabAlertType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $range
     */
    private $range = null;

    /**
     * @property string $alert
     */
    private $alert = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as range
     *
     * @return string
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * @param string $range
     * @return self
     */
    public function setRange($range)
    {
        $this->range = $range;
        return $this;
    }

    /**
     * Gets as alert
     *
     * @return string
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * @param string $alert
     * @return self
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;
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

