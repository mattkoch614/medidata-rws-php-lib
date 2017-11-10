<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionSignatureRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-SignatureRef
 */
class ODMcomplexTypeDefinitionSignatureRefType
{

    /**
     * @property string $signatureOID
     */
    private $signatureOID = null;

    /**
     * Gets as signatureOID
     *
     * @return string
     */
    public function getSignatureOID()
    {
        return $this->signatureOID;
    }

    /**
     * Sets a new signatureOID
     *
     * @param string $signatureOID
     * @return self
     */
    public function setSignatureOID($signatureOID)
    {
        $this->signatureOID = $signatureOID;
        return $this;
    }


}

