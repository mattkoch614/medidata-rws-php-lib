<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolStudyPeriodRefType
 *
 *
 * XSD Type: mdsol-StudyPeriodRef
 */
class MdsolStudyPeriodRefType
{

    /**
     * @property string $studyPeriodOID
     */
    private $studyPeriodOID = null;

    /**
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * Gets as studyPeriodOID
     *
     * @return string
     */
    public function getStudyPeriodOID()
    {
        return $this->studyPeriodOID;
    }

    /**
     * Sets a new studyPeriodOID
     *
     * @param string $studyPeriodOID
     * @return self
     */
    public function setStudyPeriodOID($studyPeriodOID)
    {
        $this->studyPeriodOID = $studyPeriodOID;
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


}

