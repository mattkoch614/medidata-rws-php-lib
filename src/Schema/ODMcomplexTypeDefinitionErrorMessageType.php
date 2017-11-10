<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionErrorMessageType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ErrorMessage
 */
class ODMcomplexTypeDefinitionErrorMessageType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\TranslatedText[] $translatedText
     */
    private $translatedText = array(
        
    );

    /**
     * Adds as translatedText
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\TranslatedText $translatedText
     */
    public function addToTranslatedText(\Medidata\RwsPhp\Schema\ODM\TranslatedText $translatedText)
    {
        $this->translatedText[] = $translatedText;
        return $this;
    }

    /**
     * isset translatedText
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTranslatedText($index)
    {
        return isset($this->translatedText[$index]);
    }

    /**
     * unset translatedText
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTranslatedText($index)
    {
        unset($this->translatedText[$index]);
    }

    /**
     * Gets as translatedText
     *
     * @return \Medidata\RwsPhp\Schema\ODM\TranslatedText[]
     */
    public function getTranslatedText()
    {
        return $this->translatedText;
    }

    /**
     * Sets a new translatedText
     *
     * @param \Medidata\RwsPhp\Schema\ODM\TranslatedText[] $translatedText
     * @return self
     */
    public function setTranslatedText(array $translatedText)
    {
        $this->translatedText = $translatedText;
        return $this;
    }


}

