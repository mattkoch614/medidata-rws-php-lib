<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionCodeListRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-CodeListRef
 */
class ODMcomplexTypeDefinitionCodeListRefType
{

    /**
     * @property string $codeListOID
     */
    private $codeListOID = null;

    /**
     * Gets as codeListOID
     *
     * @return string
     */
    public function getCodeListOID()
    {
        return $this->codeListOID;
    }

    /**
     * Sets a new codeListOID
     *
     * @param string $codeListOID
     * @return self
     */
    public function setCodeListOID($codeListOID)
    {
        $this->codeListOID = $codeListOID;
        return $this;
    }


}

