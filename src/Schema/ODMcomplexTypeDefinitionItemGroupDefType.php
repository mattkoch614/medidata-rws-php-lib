<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionItemGroupDefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ItemGroupDef
 */
class ODMcomplexTypeDefinitionItemGroupDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $repeating
     */
    private $repeating = null;

    /**
     * @property string $isReferenceData
     */
    private $isReferenceData = null;

    /**
     * @property string $sASDatasetName
     */
    private $sASDatasetName = null;

    /**
     * @property string $domain
     */
    private $domain = null;

    /**
     * @property string $origin
     */
    private $origin = null;

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property string $purpose
     */
    private $purpose = null;

    /**
     * @property string $comment
     */
    private $comment = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemRef[] $itemRef
     */
    private $itemRef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Alias[] $alias
     */
    private $alias = array(
        
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as repeating
     *
     * @return string
     */
    public function getRepeating()
    {
        return $this->repeating;
    }

    /**
     * Sets a new repeating
     *
     * @param string $repeating
     * @return self
     */
    public function setRepeating($repeating)
    {
        $this->repeating = $repeating;
        return $this;
    }

    /**
     * Gets as isReferenceData
     *
     * @return string
     */
    public function getIsReferenceData()
    {
        return $this->isReferenceData;
    }

    /**
     * Sets a new isReferenceData
     *
     * @param string $isReferenceData
     * @return self
     */
    public function setIsReferenceData($isReferenceData)
    {
        $this->isReferenceData = $isReferenceData;
        return $this;
    }

    /**
     * Gets as sASDatasetName
     *
     * @return string
     */
    public function getSASDatasetName()
    {
        return $this->sASDatasetName;
    }

    /**
     * Sets a new sASDatasetName
     *
     * @param string $sASDatasetName
     * @return self
     */
    public function setSASDatasetName($sASDatasetName)
    {
        $this->sASDatasetName = $sASDatasetName;
        return $this;
    }

    /**
     * Gets as domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * @param string $domain
     * @return self
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Gets as origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * @param string $origin
     * @return self
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * @param string $purpose
     * @return self
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Description $description
     * @return self
     */
    public function setDescription(\Medidata\RwsPhp\Schema\ODM\Description $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as itemRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemRef $itemRef
     */
    public function addToItemRef(\Medidata\RwsPhp\Schema\ODM\ItemRef $itemRef)
    {
        $this->itemRef[] = $itemRef;
        return $this;
    }

    /**
     * isset itemRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemRef($index)
    {
        return isset($this->itemRef[$index]);
    }

    /**
     * unset itemRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemRef($index)
    {
        unset($this->itemRef[$index]);
    }

    /**
     * Gets as itemRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemRef[]
     */
    public function getItemRef()
    {
        return $this->itemRef;
    }

    /**
     * Sets a new itemRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemRef[] $itemRef
     * @return self
     */
    public function setItemRef(array $itemRef)
    {
        $this->itemRef = $itemRef;
        return $this;
    }

    /**
     * Adds as alias
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Alias $alias
     */
    public function addToAlias(\Medidata\RwsPhp\Schema\ODM\Alias $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * isset alias
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAlias($index)
    {
        return isset($this->alias[$index]);
    }

    /**
     * unset alias
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAlias($index)
    {
        unset($this->alias[$index]);
    }

    /**
     * Gets as alias
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Alias[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Alias[] $alias
     * @return self
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }


}

