<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionSummaryType
 *
 * The Summary element provides the ability to define a set of parameters to the
 * study design. 
 *  It is placed inside a ODM Protocol element in order to extend on ODM file with
 * SDM structural definitions.
 * XSD Type: SDMcomplexTypeDefinition-Summary
 */
class SDMcomplexTypeDefinitionSummaryType
{

    /**
     * Description of summary
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * List of parameters
     *
     * @property \Medidata\RwsPhp\Schema\StudyDesign\Parameter[] $parameter
     */
    private $parameter = array(
        
    );

    /**
     * Gets as description
     *
     * Description of summary
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
     * Description of summary
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
     * Adds as parameter
     *
     * List of parameters
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Parameter $parameter
     */
    public function addToParameter(\Medidata\RwsPhp\Schema\StudyDesign\Parameter $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * List of parameters
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * List of parameters
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * List of parameters
     *
     * @return \Medidata\RwsPhp\Schema\StudyDesign\Parameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * List of parameters
     *
     * @param \Medidata\RwsPhp\Schema\StudyDesign\Parameter[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

