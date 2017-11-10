<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingWorkflowsType
 *
 *
 * XSD Type: mdsol-CodingWorkflows
 */
class MdsolCodingWorkflowsType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowDef[]
     * $codingWorkflowDef
     */
    private $codingWorkflowDef = array(
        
    );

    /**
     * Adds as codingWorkflowDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowDef $codingWorkflowDef
     */
    public function addToCodingWorkflowDef(\Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowDef $codingWorkflowDef)
    {
        $this->codingWorkflowDef[] = $codingWorkflowDef;
        return $this;
    }

    /**
     * isset codingWorkflowDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodingWorkflowDef($index)
    {
        return isset($this->codingWorkflowDef[$index]);
    }

    /**
     * unset codingWorkflowDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodingWorkflowDef($index)
    {
        unset($this->codingWorkflowDef[$index]);
    }

    /**
     * Gets as codingWorkflowDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowDef[]
     */
    public function getCodingWorkflowDef()
    {
        return $this->codingWorkflowDef;
    }

    /**
     * Sets a new codingWorkflowDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingWorkflowDef[] $codingWorkflowDef
     * @return self
     */
    public function setCodingWorkflowDef(array $codingWorkflowDef)
    {
        $this->codingWorkflowDef = $codingWorkflowDef;
        return $this;
    }


}

