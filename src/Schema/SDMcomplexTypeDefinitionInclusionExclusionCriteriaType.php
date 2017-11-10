<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionInclusionExclusionCriteriaType
 *
 * Container element for inclusion and exclution criteria
 * XSD Type: SDMcomplexTypeDefinition-InclusionExclusionCriteria
 */
class SDMcomplexTypeDefinitionInclusionExclusionCriteriaType
{

    /**
     * Description of the inclusion/exclusion criteria
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * Inclusion criteria container
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\InclusionCriteria
     * $inclusionCriteria
     */
    private $inclusionCriteria = null;

    /**
     * Exclusion criteria container
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\ExclusionCriteria
     * $exclusionCriteria
     */
    private $exclusionCriteria = null;

    /**
     * Gets as description
     *
     * Description of the inclusion/exclusion criteria
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
     * Description of the inclusion/exclusion criteria
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
     * Gets as inclusionCriteria
     *
     * Inclusion criteria container
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\InclusionCriteria
     */
    public function getInclusionCriteria()
    {
        return $this->inclusionCriteria;
    }

    /**
     * Sets a new inclusionCriteria
     *
     * Inclusion criteria container
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\InclusionCriteria $inclusionCriteria
     * @return self
     */
    public function setInclusionCriteria(\Medidata\RwsPhp\Schema\StudyDesign\InclusionCriteria $inclusionCriteria)
    {
        $this->inclusionCriteria = $inclusionCriteria;
        return $this;
    }

    /**
     * Gets as exclusionCriteria
     *
     * Exclusion criteria container
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\ExclusionCriteria
     */
    public function getExclusionCriteria()
    {
        return $this->exclusionCriteria;
    }

    /**
     * Sets a new exclusionCriteria
     *
     * Exclusion criteria container
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\ExclusionCriteria $exclusionCriteria
     * @return self
     */
    public function setExclusionCriteria(\Medidata\RwsPhp\Schema\StudyDesign\ExclusionCriteria $exclusionCriteria)
    {
        $this->exclusionCriteria = $exclusionCriteria;
        return $this;
    }


}

