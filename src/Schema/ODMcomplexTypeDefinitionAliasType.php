<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionAliasType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Alias
 */
class ODMcomplexTypeDefinitionAliasType
{

    /**
     * @property string $context
     */
    private $context = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * @param string $context
     * @return self
     */
    public function setContext($context)
    {
        $this->context = $context;
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


}

