<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionExternalQuestionType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ExternalQuestion
 */
class ODMcomplexTypeDefinitionExternalQuestionType
{

    /**
     * @property string $dictionary
     */
    private $dictionary = null;

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as dictionary
     *
     * @return string
     */
    public function getDictionary()
    {
        return $this->dictionary;
    }

    /**
     * Sets a new dictionary
     *
     * @param string $dictionary
     * @return self
     */
    public function setDictionary($dictionary)
    {
        $this->dictionary = $dictionary;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


}

