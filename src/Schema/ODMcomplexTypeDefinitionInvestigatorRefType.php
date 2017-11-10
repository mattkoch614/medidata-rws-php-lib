<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionInvestigatorRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-InvestigatorRef
 */
class ODMcomplexTypeDefinitionInvestigatorRefType
{

    /**
     * @property string $userOID
     */
    private $userOID = null;

    /**
     * Gets as userOID
     *
     * @return string
     */
    public function getUserOID()
    {
        return $this->userOID;
    }

    /**
     * Sets a new userOID
     *
     * @param string $userOID
     * @return self
     */
    public function setUserOID($userOID)
    {
        $this->userOID = $userOID;
        return $this;
    }


}

