<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCodingWorkflowRefType
 *
 *
 * XSD Type: mdsol-CodingWorkflowRef
 */
class MdsolCodingWorkflowRefType
{

    /**
     * @property string $codingWorkflowOID
     */
    private $codingWorkflowOID = null;

    /**
     * Gets as codingWorkflowOID
     *
     * @return string
     */
    public function getCodingWorkflowOID()
    {
        return $this->codingWorkflowOID;
    }

    /**
     * Sets a new codingWorkflowOID
     *
     * @param string $codingWorkflowOID
     * @return self
     */
    public function setCodingWorkflowOID($codingWorkflowOID)
    {
        $this->codingWorkflowOID = $codingWorkflowOID;
        return $this;
    }


}

