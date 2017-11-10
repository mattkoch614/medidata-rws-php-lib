<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionEntryCriteriaType
 *
 * The EntryCriteria element describes the criteria for allowing a subject to enter
 * a structural element
 * XSD Type: SDMcomplexTypeDefinition-EntryCriteria
 */
class SDMcomplexTypeDefinitionEntryCriteriaType
{

    /**
     * Include Inclusion/Exclusion criteria in entry criteria
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\IncludeInclusionExclusionCriteria
     * $includeInclusionExclusionCriteria
     */
    private $includeInclusionExclusionCriteria = null;

    /**
     * Definition of a single entry criterion
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Criterion[] $criterion
     */
    private $criterion = array(
        
    );

    /**
     * Gets as includeInclusionExclusionCriteria
     *
     * Include Inclusion/Exclusion criteria in entry criteria
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\IncludeInclusionExclusionCriteria
     */
    public function getIncludeInclusionExclusionCriteria()
    {
        return $this->includeInclusionExclusionCriteria;
    }

    /**
     * Sets a new includeInclusionExclusionCriteria
     *
     * Include Inclusion/Exclusion criteria in entry criteria
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\IncludeInclusionExclusionCriteria
     * $includeInclusionExclusionCriteria
     * @return self
     */
    public function setIncludeInclusionExclusionCriteria(\Medidata\RwsPhp\Schema\StudyDesign\IncludeInclusionExclusionCriteria $includeInclusionExclusionCriteria)
    {
        $this->includeInclusionExclusionCriteria = $includeInclusionExclusionCriteria;
        return $this;
    }

    /**
     * Adds as criterion
     *
     * Definition of a single entry criterion
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Criterion $criterion
     */
    public function addToCriterion(\Medidata\RwsPhp\Schema\StudyDesign\Criterion $criterion)
    {
        $this->criterion[] = $criterion;
        return $this;
    }

    /**
     * isset criterion
     *
     * Definition of a single entry criterion
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCriterion($index)
    {
        return isset($this->criterion[$index]);
    }

    /**
     * unset criterion
     *
     * Definition of a single entry criterion
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCriterion($index)
    {
        unset($this->criterion[$index]);
    }

    /**
     * Gets as criterion
     *
     * Definition of a single entry criterion
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\Criterion[]
     */
    public function getCriterion()
    {
        return $this->criterion;
    }

    /**
     * Sets a new criterion
     *
     * Definition of a single entry criterion
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Criterion[] $criterion
     * @return self
     */
    public function setCriterion(array $criterion)
    {
        $this->criterion = $criterion;
        return $this;
    }


}

