<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionSignatureType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Signature
 */
class ODMcomplexTypeDefinitionSignatureType
{

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\UserRef $userRef
     */
    private $userRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef
     */
    private $locationRef = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\SignatureRef $signatureRef
     */
    private $signatureRef = null;

    /**
     * @property \DateTime $dateTimeStamp
     */
    private $dateTimeStamp = null;

    /**
     * @property string $cryptoBindingManifest
     */
    private $cryptoBindingManifest = null;

    /**
     * Gets as iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as userRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\UserRef
     */
    public function getUserRef()
    {
        return $this->userRef;
    }

    /**
     * Sets a new userRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\UserRef $userRef
     * @return self
     */
    public function setUserRef(\Medidata\RwsPhp\Schema\ODM\UserRef $userRef)
    {
        $this->userRef = $userRef;
        return $this;
    }

    /**
     * Gets as locationRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\LocationRef
     */
    public function getLocationRef()
    {
        return $this->locationRef;
    }

    /**
     * Sets a new locationRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef
     * @return self
     */
    public function setLocationRef(\Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef)
    {
        $this->locationRef = $locationRef;
        return $this;
    }

    /**
     * Gets as signatureRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\SignatureRef
     */
    public function getSignatureRef()
    {
        return $this->signatureRef;
    }

    /**
     * Sets a new signatureRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\SignatureRef $signatureRef
     * @return self
     */
    public function setSignatureRef(\Medidata\RwsPhp\Schema\ODM\SignatureRef $signatureRef)
    {
        $this->signatureRef = $signatureRef;
        return $this;
    }

    /**
     * Gets as dateTimeStamp
     *
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * Sets a new dateTimeStamp
     *
     * @param \DateTime $dateTimeStamp
     * @return self
     */
    public function setDateTimeStamp(\DateTime $dateTimeStamp)
    {
        $this->dateTimeStamp = $dateTimeStamp;
        return $this;
    }

    /**
     * Gets as cryptoBindingManifest
     *
     * @return string
     */
    public function getCryptoBindingManifest()
    {
        return $this->cryptoBindingManifest;
    }

    /**
     * Sets a new cryptoBindingManifest
     *
     * @param string $cryptoBindingManifest
     * @return self
     */
    public function setCryptoBindingManifest($cryptoBindingManifest)
    {
        $this->cryptoBindingManifest = $cryptoBindingManifest;
        return $this;
    }


}

