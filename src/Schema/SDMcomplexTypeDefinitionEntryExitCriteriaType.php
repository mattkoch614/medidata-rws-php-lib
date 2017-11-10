<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionEntryExitCriteriaType
 *
 * The EntryExitCriteria element describes the criteria for allowing a subject to
 * enter or exit a structural element such as an activity, a segment, a study
 * event, a cell, an epoch, or the study as a whole.
 * XSD Type: SDMcomplexTypeDefinition-EntryExitCriteria
 */
class SDMcomplexTypeDefinitionEntryExitCriteriaType
{

    /**
     * Unique identifier
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name or description
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The structural element type on which the set of entry/exit criteria applies
     *
     * @property string $structuralElementType
     */
    private $structuralElementType = null;

    /**
     * The OID of the structural element on which the set of entry/exit criteria
     * applies.
     *  The referenced structural element must be of the type given by the
     * StructuralElementType attribute
     *
     * @property string $structuralElementOID
     */
    private $structuralElementOID = null;

    /**
     * Description of the criteria
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * List of entry criteria
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\EntryCriteria $entryCriteria
     */
    private $entryCriteria = null;

    /**
     * List of exit criteria
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ExitCriteria $exitCriteria
     */
    private $exitCriteria = null;

    /**
     * Gets as oID
     *
     * Unique identifier
     *
     * @return string
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * Sets a new oID
     *
     * Unique identifier
     *
     * @param string $oID
     * @return self
     */
    public function setOID($oID)
    {
        $this->oID = $oID;
        return $this;
    }

    /**
     * Gets as name
     *
     * Short name or description
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
     * Short name or description
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as structuralElementType
     *
     * The structural element type on which the set of entry/exit criteria applies
     *
     * @return string
     */
    public function getStructuralElementType()
    {
        return $this->structuralElementType;
    }

    /**
     * Sets a new structuralElementType
     *
     * The structural element type on which the set of entry/exit criteria applies
     *
     * @param string $structuralElementType
     * @return self
     */
    public function setStructuralElementType($structuralElementType)
    {
        $this->structuralElementType = $structuralElementType;
        return $this;
    }

    /**
     * Gets as structuralElementOID
     *
     * The OID of the structural element on which the set of entry/exit criteria
     * applies.
     *  The referenced structural element must be of the type given by the
     * StructuralElementType attribute
     *
     * @return string
     */
    public function getStructuralElementOID()
    {
        return $this->structuralElementOID;
    }

    /**
     * Sets a new structuralElementOID
     *
     * The OID of the structural element on which the set of entry/exit criteria
     * applies.
     *  The referenced structural element must be of the type given by the
     * StructuralElementType attribute
     *
     * @param string $structuralElementOID
     * @return self
     */
    public function setStructuralElementOID($structuralElementOID)
    {
        $this->structuralElementOID = $structuralElementOID;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the criteria
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the criteria
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Description $description
     * @return self
     */
    public function setDescription(\Medidata\RwsPhp\Schema\ODM\Description $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as entryCriteria
     *
     * List of entry criteria
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\EntryCriteria
     */
    public function getEntryCriteria()
    {
        return $this->entryCriteria;
    }

    /**
     * Sets a new entryCriteria
     *
     * List of entry criteria
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\EntryCriteria $entryCriteria
     * @return self
     */
    public function setEntryCriteria(\Medidata\RwsPhp\Schema\StudyDesign\EntryCriteria $entryCriteria)
    {
        $this->entryCriteria = $entryCriteria;
        return $this;
    }

    /**
     * Gets as exitCriteria
     *
     * List of exit criteria
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ExitCriteria
     */
    public function getExitCriteria()
    {
        return $this->exitCriteria;
    }

    /**
     * Sets a new exitCriteria
     *
     * List of exit criteria
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ExitCriteria $exitCriteria
     * @return self
     */
    public function setExitCriteria(\Medidata\RwsPhp\Schema\StudyDesign\ExitCriteria $exitCriteria)
    {
        $this->exitCriteria = $exitCriteria;
        return $this;
    }


}

