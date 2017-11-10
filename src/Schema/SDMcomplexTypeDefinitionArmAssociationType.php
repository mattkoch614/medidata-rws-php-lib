<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionArmAssociationType
 *
 * A ArmAssociation links cell definitions to arms.
 * XSD Type: SDMcomplexTypeDefinition-ArmAssociation
 */
class SDMcomplexTypeDefinitionArmAssociationType
{

    /**
     * Indication of whether or not the arms are blinded of not
     *
     * @property string $type
     */
    private $type = null;

    /**
     * List of references to Arms
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ArmRef[] $armRef
     */
    private $armRef = array(
        
    );

    /**
     * Gets as type
     *
     * Indication of whether or not the arms are blinded of not
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indication of whether or not the arms are blinded of not
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as armRef
     *
     * List of references to Arms
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ArmRef $armRef
     */
    public function addToArmRef(\Medidata\RwsPhp\Schema\StudyDesign\ArmRef $armRef)
    {
        $this->armRef[] = $armRef;
        return $this;
    }

    /**
     * isset armRef
     *
     * List of references to Arms
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArmRef($index)
    {
        return isset($this->armRef[$index]);
    }

    /**
     * unset armRef
     *
     * List of references to Arms
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArmRef($index)
    {
        unset($this->armRef[$index]);
    }

    /**
     * Gets as armRef
     *
     * List of references to Arms
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ArmRef[]
     */
    public function getArmRef()
    {
        return $this->armRef;
    }

    /**
     * Sets a new armRef
     *
     * List of references to Arms
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ArmRef[] $armRef
     * @return self
     */
    public function setArmRef(array $armRef)
    {
        $this->armRef = $armRef;
        return $this;
    }


}

