<?php

namespace Medidata\RwsPhp\Schema\xmldsig;

/**
 * Class representing KeyValueType
 *
 *
 * XSD Type: KeyValueType
 */
class KeyValueType
{

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @property \Medidata\RwsPhp\Schema\xmldsig\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(\Medidata\RwsPhp\Schema\xmldsig\DSAKeyValue $dSAKeyValue)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \Medidata\RwsPhp\Schema\xmldsig\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \Medidata\RwsPhp\Schema\xmldsig\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(\Medidata\RwsPhp\Schema\xmldsig\RSAKeyValue $rSAKeyValue)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }


}

