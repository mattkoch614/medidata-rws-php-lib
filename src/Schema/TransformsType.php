<?php

namespace Medidata\RwsPhp\Schema\xmldsig;

/**
 * Class representing TransformsType
 *
 *
 * XSD Type: TransformsType
 */
class TransformsType
{

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\Transform[] $transform
     */
    private $transform = array(
        
    );

    /**
     * Adds as transform
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\xmldsig\Transform $transform
     */
    public function addToTransform(\Medidata\RwsPhp\Schema\xmldsig\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }


}

