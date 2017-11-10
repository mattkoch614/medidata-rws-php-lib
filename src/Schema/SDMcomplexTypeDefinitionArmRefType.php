<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionArmRefType
 *
 * An ArmRef is used within ArmAssocation to link cell definitions to arms.
 * XSD Type: SDMcomplexTypeDefinition-ArmRef
 */
class SDMcomplexTypeDefinitionArmRefType
{

    /**
     * OID of the references ArmDef
     *
     * @property string $armOID
     */
    private $armOID = null;

    /**
     * Gets as armOID
     *
     * OID of the references ArmDef
     *
     * @return string
     */
    public function getArmOID()
    {
        return $this->armOID;
    }

    /**
     * Sets a new armOID
     *
     * OID of the references ArmDef
     *
     * @param string $armOID
     * @return self
     */
    public function setArmOID($armOID)
    {
        $this->armOID = $armOID;
        return $this;
    }


}

