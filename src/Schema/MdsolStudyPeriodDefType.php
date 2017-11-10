<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolStudyPeriodDefType
 *
 *
 * XSD Type: mdsol-StudyPeriodDef
 */
class MdsolStudyPeriodDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $periodType
     */
    private $periodType = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\StudyEventRef[] $studyEventRef
     */
    private $studyEventRef = array(
        
    );

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

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as periodType
     *
     * @return string
     */
    public function getPeriodType()
    {
        return $this->periodType;
    }

    /**
     * Sets a new periodType
     *
     * @param string $periodType
     * @return self
     */
    public function setPeriodType($periodType)
    {
        $this->periodType = $periodType;
        return $this;
    }

    /**
     * Adds as studyEventRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventRef $studyEventRef
     */
    public function addToStudyEventRef(\Medidata\RwsPhp\Schema\ODM\StudyEventRef $studyEventRef)
    {
        $this->studyEventRef[] = $studyEventRef;
        return $this;
    }

    /**
     * isset studyEventRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudyEventRef($index)
    {
        return isset($this->studyEventRef[$index]);
    }

    /**
     * unset studyEventRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudyEventRef($index)
    {
        unset($this->studyEventRef[$index]);
    }

    /**
     * Gets as studyEventRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\StudyEventRef[]
     */
    public function getStudyEventRef()
    {
        return $this->studyEventRef;
    }

    /**
     * Sets a new studyEventRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventRef[] $studyEventRef
     * @return self
     */
    public function setStudyEventRef(array $studyEventRef)
    {
        $this->studyEventRef = $studyEventRef;
        return $this;
    }


}

