<?php

namespace Medidata\RwsPhp\Schema\xmldsig;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\ObjectXsd[] $object
     */
    private $object = array(
        
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
     * Gets as signedInfo
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\Medidata\RwsPhp\Schema\xmldsig\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\Medidata\RwsPhp\Schema\xmldsig\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(\Medidata\RwsPhp\Schema\xmldsig\KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\xmldsig\ObjectXsd $object
     */
    public function addToObject(\Medidata\RwsPhp\Schema\xmldsig\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param scalar $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object)
    {
        $this->object = $object;
        return $this;
    }


}

