<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionMeasurementUnitType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-MeasurementUnit
 */
class ODMcomplexTypeDefinitionMeasurementUnitType
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
     * @property \Medidata\RwsPhp\Schema\ODM\Symbol $symbol
     */
    private $symbol = null;

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
     * Gets as symbol
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Symbol
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Sets a new symbol
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Symbol $symbol
     * @return self
     */
    public function setSymbol(\Medidata\RwsPhp\Schema\ODM\Symbol $symbol)
    {
        $this->symbol = $symbol;
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

