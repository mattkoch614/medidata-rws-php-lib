<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolLabelRefType
 *
 *
 * XSD Type: mdsol-LabelRef
 */
class MdsolLabelRefType
{

    /**
     * @property string $labelOID
     */
    private $labelOID = null;

    /**
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * @property string $mandatory
     */
    private $mandatory = null;

    /**
     * Gets as labelOID
     *
     * @return string
     */
    public function getLabelOID()
    {
        return $this->labelOID;
    }

    /**
     * Sets a new labelOID
     *
     * @param string $labelOID
     * @return self
     */
    public function setLabelOID($labelOID)
    {
        $this->labelOID = $labelOID;
        return $this;
    }

    /**
     * Gets as orderNumber
     *
     * @return integer
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Sets a new orderNumber
     *
     * @param integer $orderNumber
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * Gets as mandatory
     *
     * @return string
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Sets a new mandatory
     *
     * @param string $mandatory
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
        return $this;
    }


}

