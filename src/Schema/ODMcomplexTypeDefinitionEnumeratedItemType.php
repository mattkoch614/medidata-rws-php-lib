<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionEnumeratedItemType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-EnumeratedItem
 */
class ODMcomplexTypeDefinitionEnumeratedItemType
{

    /**
     * @property string $codedValue
     */
    private $codedValue = null;

    /**
     * @property float $rank
     */
    private $rank = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Alias[] $alias
     */
    private $alias = array(
        
    );

    /**
     * Gets as codedValue
     *
     * @return string
     */
    public function getCodedValue()
    {
        return $this->codedValue;
    }

    /**
     * Sets a new codedValue
     *
     * @param string $codedValue
     * @return self
     */
    public function setCodedValue($codedValue)
    {
        $this->codedValue = $codedValue;
        return $this;
    }

    /**
     * Gets as rank
     *
     * @return float
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets a new rank
     *
     * @param float $rank
     * @return self
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
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

