<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionConditionDefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ConditionDef
 */
class ODMcomplexTypeDefinitionConditionDefType
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
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\FormalExpression[] $formalExpression
     */
    private $formalExpression = array(
        
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
     * Adds as formalExpression
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\FormalExpression $formalExpression
     */
    public function addToFormalExpression(\Medidata\RwsPhp\Schema\ODM\FormalExpression $formalExpression)
    {
        $this->formalExpression[] = $formalExpression;
        return $this;
    }

    /**
     * isset formalExpression
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormalExpression($index)
    {
        return isset($this->formalExpression[$index]);
    }

    /**
     * unset formalExpression
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormalExpression($index)
    {
        unset($this->formalExpression[$index]);
    }

    /**
     * Gets as formalExpression
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FormalExpression[]
     */
    public function getFormalExpression()
    {
        return $this->formalExpression;
    }

    /**
     * Sets a new formalExpression
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FormalExpression[] $formalExpression
     * @return self
     */
    public function setFormalExpression(array $formalExpression)
    {
        $this->formalExpression = $formalExpression;
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

