<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionInclusionCriteriaType
 *
 * Container element for inclusion criteria
 * XSD Type: SDMcomplexTypeDefinition-InclusionCriteria
 */
class SDMcomplexTypeDefinitionInclusionCriteriaType
{

    /**
     * List of criterion forming the inclusion criteria
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Criterion[] $criterion
     */
    private $criterion = array(
        
    );

    /**
     * Adds as criterion
     *
     * List of criterion forming the inclusion criteria
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
     * List of criterion forming the inclusion criteria
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
     * List of criterion forming the inclusion criteria
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
     * List of criterion forming the inclusion criteria
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
     * List of criterion forming the inclusion criteria
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

