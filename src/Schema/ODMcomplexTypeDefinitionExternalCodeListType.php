<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionExternalCodeListType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ExternalCodeList
 */
class ODMcomplexTypeDefinitionExternalCodeListType
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
     * @property string $href
     */
    private $href = null;

    /**
     * @property string $ref
     */
    private $ref = null;

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
     * Gets as href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets a new href
     *
     * @param string $href
     * @return self
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Gets as ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets a new ref
     *
     * @param string $ref
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }


}

