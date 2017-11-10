<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionFlagType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Flag
 */
class ODMcomplexTypeDefinitionFlagType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\FlagValue $flagValue
     */
    private $flagValue = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\FlagType $flagType
     */
    private $flagType = null;

    /**
     * Gets as flagValue
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FlagValue
     */
    public function getFlagValue()
    {
        return $this->flagValue;
    }

    /**
     * Sets a new flagValue
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FlagValue $flagValue
     * @return self
     */
    public function setFlagValue(\Medidata\RwsPhp\Schema\ODM\FlagValue $flagValue)
    {
        $this->flagValue = $flagValue;
        return $this;
    }

    /**
     * Gets as flagType
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FlagType
     */
    public function getFlagType()
    {
        return $this->flagType;
    }

    /**
     * Sets a new flagType
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FlagType $flagType
     * @return self
     */
    public function setFlagType(\Medidata\RwsPhp\Schema\ODM\FlagType $flagType)
    {
        $this->flagType = $flagType;
        return $this;
    }


}

