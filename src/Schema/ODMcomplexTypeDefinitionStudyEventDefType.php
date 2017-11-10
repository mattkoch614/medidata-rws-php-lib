<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionStudyEventDefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-StudyEventDef
 */
class ODMcomplexTypeDefinitionStudyEventDefType
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
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $category
     */
    private $category = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\FormRef[] $formRef
     */
    private $formRef = array(
        
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
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
     * Adds as formRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\FormRef $formRef
     */
    public function addToFormRef(\Medidata\RwsPhp\Schema\ODM\FormRef $formRef)
    {
        $this->formRef[] = $formRef;
        return $this;
    }

    /**
     * isset formRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormRef($index)
    {
        return isset($this->formRef[$index]);
    }

    /**
     * unset formRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormRef($index)
    {
        unset($this->formRef[$index]);
    }

    /**
     * Gets as formRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FormRef[]
     */
    public function getFormRef()
    {
        return $this->formRef;
    }

    /**
     * Sets a new formRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FormRef[] $formRef
     * @return self
     */
    public function setFormRef(array $formRef)
    {
        $this->formRef = $formRef;
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

