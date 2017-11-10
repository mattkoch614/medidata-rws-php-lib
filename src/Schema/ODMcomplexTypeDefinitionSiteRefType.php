<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionSiteRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-SiteRef
 */
class ODMcomplexTypeDefinitionSiteRefType
{

    /**
     * @property string $locationOID
     */
    private $locationOID = null;

    /**
     * Gets as locationOID
     *
     * @return string
     */
    public function getLocationOID()
    {
        return $this->locationOID;
    }

    /**
     * Sets a new locationOID
     *
     * @param string $locationOID
     * @return self
     */
    public function setLocationOID($locationOID)
    {
        $this->locationOID = $locationOID;
        return $this;
    }


}

