<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingWorkflowDefType
 *
 *
 * XSD Type: mdsol-CodingWorkflowDef
 */
class MdsolCodingWorkflowDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData[]
     * $codingWorkflowData
     */
    private $codingWorkflowData = array(
        
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
     * Adds as codingWorkflowData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData $codingWorkflowData
     */
    public function addToCodingWorkflowData(\Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData $codingWorkflowData)
    {
        $this->codingWorkflowData[] = $codingWorkflowData;
        return $this;
    }

    /**
     * isset codingWorkflowData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodingWorkflowData($index)
    {
        return isset($this->codingWorkflowData[$index]);
    }

    /**
     * unset codingWorkflowData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodingWorkflowData($index)
    {
        unset($this->codingWorkflowData[$index]);
    }

    /**
     * Gets as codingWorkflowData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData[]
     */
    public function getCodingWorkflowData()
    {
        return $this->codingWorkflowData;
    }

    /**
     * Sets a new codingWorkflowData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowData[]
     * $codingWorkflowData
     * @return self
     */
    public function setCodingWorkflowData(array $codingWorkflowData)
    {
        $this->codingWorkflowData = $codingWorkflowData;
        return $this;
    }


}

