<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionAdminDataType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-AdminData
 */
class ODMcomplexTypeDefinitionAdminDataType
{

    /**
     * @property string $studyOID
     */
    private $studyOID = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\User[] $user
     */
    private $user = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Location[] $location
     */
    private $location = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\SignatureDef[] $signatureDef
     */
    private $signatureDef = array(
        
    );

    /**
     * Gets as studyOID
     *
     * @return string
     */
    public function getStudyOID()
    {
        return $this->studyOID;
    }

    /**
     * Sets a new studyOID
     *
     * @param string $studyOID
     * @return self
     */
    public function setStudyOID($studyOID)
    {
        $this->studyOID = $studyOID;
        return $this;
    }

    /**
     * Adds as user
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\User $user
     */
    public function addToUser(\Medidata\RwsPhp\Schema\ODM\User $user)
    {
        $this->user[] = $user;
        return $this;
    }

    /**
     * isset user
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUser($index)
    {
        return isset($this->user[$index]);
    }

    /**
     * unset user
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUser($index)
    {
        unset($this->user[$index]);
    }

    /**
     * Gets as user
     *
     * @return \Medidata\RwsPhp\Schema\ODM\User[]
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \Medidata\RwsPhp\Schema\ODM\User[] $user
     * @return self
     */
    public function setUser(array $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Location $location
     */
    public function addToLocation(\Medidata\RwsPhp\Schema\ODM\Location $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Location[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Location[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as signatureDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\SignatureDef $signatureDef
     */
    public function addToSignatureDef(\Medidata\RwsPhp\Schema\ODM\SignatureDef $signatureDef)
    {
        $this->signatureDef[] = $signatureDef;
        return $this;
    }

    /**
     * isset signatureDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSignatureDef($index)
    {
        return isset($this->signatureDef[$index]);
    }

    /**
     * unset signatureDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSignatureDef($index)
    {
        unset($this->signatureDef[$index]);
    }

    /**
     * Gets as signatureDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\SignatureDef[]
     */
    public function getSignatureDef()
    {
        return $this->signatureDef;
    }

    /**
     * Sets a new signatureDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\SignatureDef[] $signatureDef
     * @return self
     */
    public function setSignatureDef(array $signatureDef)
    {
        $this->signatureDef = $signatureDef;
        return $this;
    }


}

