<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionFlagValueType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-FlagValue
 */
class ODMcomplexTypeDefinitionFlagValueType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $codeListOID
     */
    private $codeListOID = null;

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
     * Gets as codeListOID
     *
     * @return string
     */
    public function getCodeListOID()
    {
        return $this->codeListOID;
    }

    /**
     * Sets a new codeListOID
     *
     * @param string $codeListOID
     * @return self
     */
    public function setCodeListOID($codeListOID)
    {
        $this->codeListOID = $codeListOID;
        return $this;
    }


}

