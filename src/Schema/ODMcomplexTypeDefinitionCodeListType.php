<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionCodeListType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-CodeList
 */
class ODMcomplexTypeDefinitionCodeListType
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
     * @property string $dataType
     */
    private $dataType = null;

    /**
     * @property string $sASFormatName
     */
    private $sASFormatName = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\CodeListItem[] $codeListItem
     */
    private $codeListItem = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ExternalCodeList $externalCodeList
     */
    private $externalCodeList = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\EnumeratedItem[] $enumeratedItem
     */
    private $enumeratedItem = array(
        
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
     * Gets as dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets a new dataType
     *
     * @param string $dataType
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * Gets as sASFormatName
     *
     * @return string
     */
    public function getSASFormatName()
    {
        return $this->sASFormatName;
    }

    /**
     * Sets a new sASFormatName
     *
     * @param string $sASFormatName
     * @return self
     */
    public function setSASFormatName($sASFormatName)
    {
        $this->sASFormatName = $sASFormatName;
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
     * Adds as codeListItem
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\CodeListItem $codeListItem
     */
    public function addToCodeListItem(\Medidata\RwsPhp\Schema\ODM\CodeListItem $codeListItem)
    {
        $this->codeListItem[] = $codeListItem;
        return $this;
    }

    /**
     * isset codeListItem
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeListItem($index)
    {
        return isset($this->codeListItem[$index]);
    }

    /**
     * unset codeListItem
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeListItem($index)
    {
        unset($this->codeListItem[$index]);
    }

    /**
     * Gets as codeListItem
     *
     * @return \Medidata\RwsPhp\Schema\ODM\CodeListItem[]
     */
    public function getCodeListItem()
    {
        return $this->codeListItem;
    }

    /**
     * Sets a new codeListItem
     *
     * @param \Medidata\RwsPhp\Schema\ODM\CodeListItem[] $codeListItem
     * @return self
     */
    public function setCodeListItem(array $codeListItem)
    {
        $this->codeListItem = $codeListItem;
        return $this;
    }

    /**
     * Gets as externalCodeList
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ExternalCodeList
     */
    public function getExternalCodeList()
    {
        return $this->externalCodeList;
    }

    /**
     * Sets a new externalCodeList
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ExternalCodeList $externalCodeList
     * @return self
     */
    public function setExternalCodeList(\Medidata\RwsPhp\Schema\ODM\ExternalCodeList $externalCodeList)
    {
        $this->externalCodeList = $externalCodeList;
        return $this;
    }

    /**
     * Adds as enumeratedItem
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\EnumeratedItem $enumeratedItem
     */
    public function addToEnumeratedItem(\Medidata\RwsPhp\Schema\ODM\EnumeratedItem $enumeratedItem)
    {
        $this->enumeratedItem[] = $enumeratedItem;
        return $this;
    }

    /**
     * isset enumeratedItem
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEnumeratedItem($index)
    {
        return isset($this->enumeratedItem[$index]);
    }

    /**
     * unset enumeratedItem
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEnumeratedItem($index)
    {
        unset($this->enumeratedItem[$index]);
    }

    /**
     * Gets as enumeratedItem
     *
     * @return \Medidata\RwsPhp\Schema\ODM\EnumeratedItem[]
     */
    public function getEnumeratedItem()
    {
        return $this->enumeratedItem;
    }

    /**
     * Sets a new enumeratedItem
     *
     * @param \Medidata\RwsPhp\Schema\ODM\EnumeratedItem[] $enumeratedItem
     * @return self
     */
    public function setEnumeratedItem(array $enumeratedItem)
    {
        $this->enumeratedItem = $enumeratedItem;
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

