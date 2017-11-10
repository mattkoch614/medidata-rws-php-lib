<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionExclusionCriteriaType
 *
 * Container element for exclusion criteria
 * XSD Type: SDMcomplexTypeDefinition-ExclusionCriteria
 */
class SDMcomplexTypeDefinitionExclusionCriteriaType
{

    /**
     * List of criterion forming the exclusion criteria
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Criterion[] $criterion
     */
    private $criterion = array(
        
    );

    /**
     * Adds as criterion
     *
     * List of criterion forming the exclusion criteria
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
     * List of criterion forming the exclusion criteria
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
     * List of criterion forming the exclusion criteria
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
     * List of criterion forming the exclusion criteria
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
     * List of criterion forming the exclusion criteria
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

