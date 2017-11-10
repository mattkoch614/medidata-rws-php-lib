<?php

namespace Medidata\RwsPhp\Schema\xmldsig;

/**
 * Class representing ManifestType
 *
 *
 * XSD Type: ManifestType
 */
class ManifestType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\Reference[] $reference
     */
    private $reference = array(
        
    );

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\xmldsig\Reference $reference
     */
    public function addToReference(\Medidata\RwsPhp\Schema\xmldsig\Reference $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\Reference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\Reference[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

