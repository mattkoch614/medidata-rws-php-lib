<?php

namespace Medidata\RwsPhp\Schema\xmldsig;

/**
 * Class representing SignedInfoType
 *
 *
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\CanonicalizationMethod
     * $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

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
     * Gets as canonicalizationMethod
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\CanonicalizationMethod
     * $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\Medidata\RwsPhp\Schema\xmldsig\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\Medidata\RwsPhp\Schema\xmldsig\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
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

