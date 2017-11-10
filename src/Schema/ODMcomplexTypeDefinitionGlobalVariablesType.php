<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionGlobalVariablesType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-GlobalVariables
 */
class ODMcomplexTypeDefinitionGlobalVariablesType
{

    /**
     * @property string $studyName
     */
    private $studyName = null;

    /**
     * @property string $studyDescription
     */
    private $studyDescription = null;

    /**
     * @property string $protocolName
     */
    private $protocolName = null;

    /**
     * Gets as studyName
     *
     * @return string
     */
    public function getStudyName()
    {
        return $this->studyName;
    }

    /**
     * Sets a new studyName
     *
     * @param string $studyName
     * @return self
     */
    public function setStudyName($studyName)
    {
        $this->studyName = $studyName;
        return $this;
    }

    /**
     * Gets as studyDescription
     *
     * @return string
     */
    public function getStudyDescription()
    {
        return $this->studyDescription;
    }

    /**
     * Sets a new studyDescription
     *
     * @param string $studyDescription
     * @return self
     */
    public function setStudyDescription($studyDescription)
    {
        $this->studyDescription = $studyDescription;
        return $this;
    }

    /**
     * Gets as protocolName
     *
     * @return string
     */
    public function getProtocolName()
    {
        return $this->protocolName;
    }

    /**
     * Sets a new protocolName
     *
     * @param string $protocolName
     * @return self
     */
    public function setProtocolName($protocolName)
    {
        $this->protocolName = $protocolName;
        return $this;
    }


}

