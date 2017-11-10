<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionProtocolType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Protocol
 */
class ODMcomplexTypeDefinitionProtocolType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\StudyEventRef[] $studyEventRef
     */
    private $studyEventRef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Alias[] $alias
     */
    private $alias = array(
        
    );

    /**
     * Gets as description
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
     * @param \Medidata\RwsPhp\Schema\ODM\Description $description
     * @return self
     */
    public function setDescription(\Medidata\RwsPhp\Schema\ODM\Description $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as studyEventRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventRef $studyEventRef
     */
    public function addToStudyEventRef(\Medidata\RwsPhp\Schema\ODM\StudyEventRef $studyEventRef)
    {
        $this->studyEventRef[] = $studyEventRef;
        return $this;
    }

    /**
     * isset studyEventRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudyEventRef($index)
    {
        return isset($this->studyEventRef[$index]);
    }

    /**
     * unset studyEventRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudyEventRef($index)
    {
        unset($this->studyEventRef[$index]);
    }

    /**
     * Gets as studyEventRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\StudyEventRef[]
     */
    public function getStudyEventRef()
    {
        return $this->studyEventRef;
    }

    /**
     * Sets a new studyEventRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventRef[] $studyEventRef
     * @return self
     */
    public function setStudyEventRef(array $studyEventRef)
    {
        $this->studyEventRef = $studyEventRef;
        return $this;
    }

    /**
     * Adds as alias
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Alias $alias
     */
    public function addToAlias(\Medidata\RwsPhp\Schema\ODM\Alias $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * isset alias
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAlias($index)
    {
        return isset($this->alias[$index]);
    }

    /**
     * unset alias
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAlias($index)
    {
        unset($this->alias[$index]);
    }

    /**
     * Gets as alias
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Alias[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Alias[] $alias
     * @return self
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }


}

