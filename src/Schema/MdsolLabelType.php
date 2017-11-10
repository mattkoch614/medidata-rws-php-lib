<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolLabelType
 *
 *
 * XSD Type: mdsol-Label
 */
class MdsolLabelType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $position
     */
    private $position = null;

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
     * Gets as position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }


}

