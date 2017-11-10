<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolLabelDefType
 *
 *
 * XSD Type: mdsol-LabelDef
 */
class MdsolLabelDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $active
     */
    private $active = null;

    /**
     * @property string $visible
     */
    private $visible = null;

    /**
     * @property integer $indentLevel
     */
    private $indentLevel = null;

    /**
     * @property string $fieldNumber
     */
    private $fieldNumber = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\TranslatedText[] $translatedText
     */
    private $translatedText = array(
        
    );

    /**
     * @property string[] $viewRestriction
     */
    private $viewRestriction = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\HelpText[] $helpText
     */
    private $helpText = array(
        
    );

    /**
     * Gets as oID
     *
     * @return string
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * Sets a new oID
     *
     * @param string $oID
     * @return self
     */
    public function setOID($oID)
    {
        $this->oID = $oID;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param string $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as visible
     *
     * @return string
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Sets a new visible
     *
     * @param string $visible
     * @return self
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Gets as indentLevel
     *
     * @return integer
     */
    public function getIndentLevel()
    {
        return $this->indentLevel;
    }

    /**
     * Sets a new indentLevel
     *
     * @param integer $indentLevel
     * @return self
     */
    public function setIndentLevel($indentLevel)
    {
        $this->indentLevel = $indentLevel;
        return $this;
    }

    /**
     * Gets as fieldNumber
     *
     * @return string
     */
    public function getFieldNumber()
    {
        return $this->fieldNumber;
    }

    /**
     * Sets a new fieldNumber
     *
     * @param string $fieldNumber
     * @return self
     */
    public function setFieldNumber($fieldNumber)
    {
        $this->fieldNumber = $fieldNumber;
        return $this;
    }

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

    /**
     * Adds as viewRestriction
     *
     * @return self
     * @param string $viewRestriction
     */
    public function addToViewRestriction($viewRestriction)
    {
        $this->viewRestriction[] = $viewRestriction;
        return $this;
    }

    /**
     * isset viewRestriction
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetViewRestriction($index)
    {
        return isset($this->viewRestriction[$index]);
    }

    /**
     * unset viewRestriction
     *
     * @param scalar $index
     * @return void
     */
    public function unsetViewRestriction($index)
    {
        unset($this->viewRestriction[$index]);
    }

    /**
     * Gets as viewRestriction
     *
     * @return string[]
     */
    public function getViewRestriction()
    {
        return $this->viewRestriction;
    }

    /**
     * Sets a new viewRestriction
     *
     * @param string $viewRestriction
     * @return self
     */
    public function setViewRestriction(array $viewRestriction)
    {
        $this->viewRestriction = $viewRestriction;
        return $this;
    }

    /**
     * Adds as helpText
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\HelpText $helpText
     */
    public function addToHelpText(\Medidata\RwsPhp\Schema\ODM\mdsol\HelpText $helpText)
    {
        $this->helpText[] = $helpText;
        return $this;
    }

    /**
     * isset helpText
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHelpText($index)
    {
        return isset($this->helpText[$index]);
    }

    /**
     * unset helpText
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHelpText($index)
    {
        unset($this->helpText[$index]);
    }

    /**
     * Gets as helpText
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\HelpText[]
     */
    public function getHelpText()
    {
        return $this->helpText;
    }

    /**
     * Sets a new helpText
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\HelpText[] $helpText
     * @return self
     */
    public function setHelpText(array $helpText)
    {
        $this->helpText = $helpText;
        return $this;
    }


}

