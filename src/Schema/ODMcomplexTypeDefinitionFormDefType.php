<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionFormDefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-FormDef
 */
class ODMcomplexTypeDefinitionFormDefType
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
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemGroupRef[] $itemGroupRef
     */
    private $itemGroupRef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ArchiveLayout[] $archiveLayout
     */
    private $archiveLayout = array(
        
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
     * Adds as itemGroupRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemGroupRef $itemGroupRef
     */
    public function addToItemGroupRef(\Medidata\RwsPhp\Schema\ODM\ItemGroupRef $itemGroupRef)
    {
        $this->itemGroupRef[] = $itemGroupRef;
        return $this;
    }

    /**
     * isset itemGroupRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemGroupRef($index)
    {
        return isset($this->itemGroupRef[$index]);
    }

    /**
     * unset itemGroupRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemGroupRef($index)
    {
        unset($this->itemGroupRef[$index]);
    }

    /**
     * Gets as itemGroupRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemGroupRef[]
     */
    public function getItemGroupRef()
    {
        return $this->itemGroupRef;
    }

    /**
     * Sets a new itemGroupRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemGroupRef[] $itemGroupRef
     * @return self
     */
    public function setItemGroupRef(array $itemGroupRef)
    {
        $this->itemGroupRef = $itemGroupRef;
        return $this;
    }

    /**
     * Adds as archiveLayout
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ArchiveLayout $archiveLayout
     */
    public function addToArchiveLayout(\Medidata\RwsPhp\Schema\ODM\ArchiveLayout $archiveLayout)
    {
        $this->archiveLayout[] = $archiveLayout;
        return $this;
    }

    /**
     * isset archiveLayout
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArchiveLayout($index)
    {
        return isset($this->archiveLayout[$index]);
    }

    /**
     * unset archiveLayout
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArchiveLayout($index)
    {
        unset($this->archiveLayout[$index]);
    }

    /**
     * Gets as archiveLayout
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ArchiveLayout[]
     */
    public function getArchiveLayout()
    {
        return $this->archiveLayout;
    }

    /**
     * Sets a new archiveLayout
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ArchiveLayout[] $archiveLayout
     * @return self
     */
    public function setArchiveLayout(array $archiveLayout)
    {
        $this->archiveLayout = $archiveLayout;
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

