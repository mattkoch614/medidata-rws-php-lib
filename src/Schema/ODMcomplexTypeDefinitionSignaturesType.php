<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionSignaturesType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Signatures
 */
class ODMcomplexTypeDefinitionSignaturesType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Signature[] $signature
     */
    private $signature = array(
        
    );

    /**
     * Adds as signature
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Signature $signature
     */
    public function addToSignature(\Medidata\RwsPhp\Schema\ODM\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

