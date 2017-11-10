<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionUserType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-User
 */
class ODMcomplexTypeDefinitionUserType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $userType
     */
    private $userType = null;

    /**
     * @property string $loginName
     */
    private $loginName = null;

    /**
     * @property string $displayName
     */
    private $displayName = null;

    /**
     * @property string $fullName
     */
    private $fullName = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * @property string $organization
     */
    private $organization = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Address[] $address
     */
    private $address = array(
        
    );

    /**
     * @property string[] $email
     */
    private $email = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Picture $picture
     */
    private $picture = null;

    /**
     * @property string $pager
     */
    private $pager = null;

    /**
     * @property string[] $fax
     */
    private $fax = array(
        
    );

    /**
     * @property string[] $phone
     */
    private $phone = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\LocationRef[] $locationRef
     */
    private $locationRef = array(
        
    );

    /**
     * @property string[] $certificate
     */
    private $certificate = array(
        
    );

    /**
     * Gets as oID
     *
     * @return string
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * Sets a new oID
     *
     * @param string $oID
     * @return self
     */
    public function setOID($oID)
    {
        $this->oID = $oID;
        return $this;
    }

    /**
     * Gets as userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets a new userType
     *
     * @param string $userType
     * @return self
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Gets as loginName
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Sets a new loginName
     *
     * @param string $loginName
     * @return self
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
        return $this;
    }

    /**
     * Gets as displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Sets a new displayName
     *
     * @param string $displayName
     * @return self
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Gets as fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * @param string $organization
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Address $address
     */
    public function addToAddress(\Medidata\RwsPhp\Schema\ODM\Address $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Address[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Address[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as email
     *
     * @return self
     * @param string $email
     */
    public function addToEmail($email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * @return string[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as picture
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Picture $picture
     * @return self
     */
    public function setPicture(\Medidata\RwsPhp\Schema\ODM\Picture $picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Gets as pager
     *
     * @return string
     */
    public function getPager()
    {
        return $this->pager;
    }

    /**
     * Sets a new pager
     *
     * @param string $pager
     * @return self
     */
    public function setPager($pager)
    {
        $this->pager = $pager;
        return $this;
    }

    /**
     * Adds as fax
     *
     * @return self
     * @param string $fax
     */
    public function addToFax($fax)
    {
        $this->fax[] = $fax;
        return $this;
    }

    /**
     * isset fax
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFax($index)
    {
        return isset($this->fax[$index]);
    }

    /**
     * unset fax
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFax($index)
    {
        unset($this->fax[$index]);
    }

    /**
     * Gets as fax
     *
     * @return string[]
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax(array $fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Adds as phone
     *
     * @return self
     * @param string $phone
     */
    public function addToPhone($phone)
    {
        $this->phone[] = $phone;
        return $this;
    }

    /**
     * isset phone
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPhone($index)
    {
        return isset($this->phone[$index]);
    }

    /**
     * unset phone
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPhone($index)
    {
        unset($this->phone[$index]);
    }

    /**
     * Gets as phone
     *
     * @return string[]
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone(array $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Adds as locationRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef
     */
    public function addToLocationRef(\Medidata\RwsPhp\Schema\ODM\LocationRef $locationRef)
    {
        $this->locationRef[] = $locationRef;
        return $this;
    }

    /**
     * isset locationRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationRef($index)
    {
        return isset($this->locationRef[$index]);
    }

    /**
     * unset locationRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationRef($index)
    {
        unset($this->locationRef[$index]);
    }

    /**
     * Gets as locationRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\LocationRef[]
     */
    public function getLocationRef()
    {
        return $this->locationRef;
    }

    /**
     * Sets a new locationRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\LocationRef[] $locationRef
     * @return self
     */
    public function setLocationRef(array $locationRef)
    {
        $this->locationRef = $locationRef;
        return $this;
    }

    /**
     * Adds as certificate
     *
     * @return self
     * @param string $certificate
     */
    public function addToCertificate($certificate)
    {
        $this->certificate[] = $certificate;
        return $this;
    }

    /**
     * isset certificate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCertificate($index)
    {
        return isset($this->certificate[$index]);
    }

    /**
     * unset certificate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCertificate($index)
    {
        unset($this->certificate[$index]);
    }

    /**
     * Gets as certificate
     *
     * @return string[]
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Sets a new certificate
     *
     * @param string $certificate
     * @return self
     */
    public function setCertificate(array $certificate)
    {
        $this->certificate = $certificate;
        return $this;
    }


}

