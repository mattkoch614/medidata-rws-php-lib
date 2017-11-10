<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionFormalExpressionType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-FormalExpression
 */
class ODMcomplexTypeDefinitionFormalExpressionType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $context
     */
    private $context = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

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


}

