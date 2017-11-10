<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionMetaDataVersionType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-MetaDataVersion
 */
class ODMcomplexTypeDefinitionMetaDataVersionType
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
     * @property string $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Include $include
     */
    private $include = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Protocol $protocol
     */
    private $protocol = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\StudyEventDef[] $studyEventDef
     */
    private $studyEventDef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\FormDef[] $formDef
     */
    private $formDef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemGroupDef[] $itemGroupDef
     */
    private $itemGroupDef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDef[] $itemDef
     */
    private $itemDef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\CodeList[] $codeList
     */
    private $codeList = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ImputationMethod[] $imputationMethod
     */
    private $imputationMethod = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Presentation[] $presentation
     */
    private $presentation = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ConditionDef[] $conditionDef
     */
    private $conditionDef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\MethodDef[] $methodDef
     */
    private $methodDef = array(
        
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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as include
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Include
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Include $include
     * @return self
     */
    public function setInclude(\Medidata\RwsPhp\Schema\ODM\Include $include)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Gets as protocol
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Protocol
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Sets a new protocol
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Protocol $protocol
     * @return self
     */
    public function setProtocol(\Medidata\RwsPhp\Schema\ODM\Protocol $protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Adds as studyEventDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventDef $studyEventDef
     */
    public function addToStudyEventDef(\Medidata\RwsPhp\Schema\ODM\StudyEventDef $studyEventDef)
    {
        $this->studyEventDef[] = $studyEventDef;
        return $this;
    }

    /**
     * isset studyEventDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudyEventDef($index)
    {
        return isset($this->studyEventDef[$index]);
    }

    /**
     * unset studyEventDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudyEventDef($index)
    {
        unset($this->studyEventDef[$index]);
    }

    /**
     * Gets as studyEventDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\StudyEventDef[]
     */
    public function getStudyEventDef()
    {
        return $this->studyEventDef;
    }

    /**
     * Sets a new studyEventDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\StudyEventDef[] $studyEventDef
     * @return self
     */
    public function setStudyEventDef(array $studyEventDef)
    {
        $this->studyEventDef = $studyEventDef;
        return $this;
    }

    /**
     * Adds as formDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\FormDef $formDef
     */
    public function addToFormDef(\Medidata\RwsPhp\Schema\ODM\FormDef $formDef)
    {
        $this->formDef[] = $formDef;
        return $this;
    }

    /**
     * isset formDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormDef($index)
    {
        return isset($this->formDef[$index]);
    }

    /**
     * unset formDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormDef($index)
    {
        unset($this->formDef[$index]);
    }

    /**
     * Gets as formDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FormDef[]
     */
    public function getFormDef()
    {
        return $this->formDef;
    }

    /**
     * Sets a new formDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FormDef[] $formDef
     * @return self
     */
    public function setFormDef(array $formDef)
    {
        $this->formDef = $formDef;
        return $this;
    }

    /**
     * Adds as itemGroupDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemGroupDef $itemGroupDef
     */
    public function addToItemGroupDef(\Medidata\RwsPhp\Schema\ODM\ItemGroupDef $itemGroupDef)
    {
        $this->itemGroupDef[] = $itemGroupDef;
        return $this;
    }

    /**
     * isset itemGroupDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemGroupDef($index)
    {
        return isset($this->itemGroupDef[$index]);
    }

    /**
     * unset itemGroupDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemGroupDef($index)
    {
        unset($this->itemGroupDef[$index]);
    }

    /**
     * Gets as itemGroupDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemGroupDef[]
     */
    public function getItemGroupDef()
    {
        return $this->itemGroupDef;
    }

    /**
     * Sets a new itemGroupDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemGroupDef[] $itemGroupDef
     * @return self
     */
    public function setItemGroupDef(array $itemGroupDef)
    {
        $this->itemGroupDef = $itemGroupDef;
        return $this;
    }

    /**
     * Adds as itemDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDef $itemDef
     */
    public function addToItemDef(\Medidata\RwsPhp\Schema\ODM\ItemDef $itemDef)
    {
        $this->itemDef[] = $itemDef;
        return $this;
    }

    /**
     * isset itemDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDef($index)
    {
        return isset($this->itemDef[$index]);
    }

    /**
     * unset itemDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDef($index)
    {
        unset($this->itemDef[$index]);
    }

    /**
     * Gets as itemDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDef[]
     */
    public function getItemDef()
    {
        return $this->itemDef;
    }

    /**
     * Sets a new itemDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDef[] $itemDef
     * @return self
     */
    public function setItemDef(array $itemDef)
    {
        $this->itemDef = $itemDef;
        return $this;
    }

    /**
     * Adds as codeList
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\CodeList $codeList
     */
    public function addToCodeList(\Medidata\RwsPhp\Schema\ODM\CodeList $codeList)
    {
        $this->codeList[] = $codeList;
        return $this;
    }

    /**
     * isset codeList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeList($index)
    {
        return isset($this->codeList[$index]);
    }

    /**
     * unset codeList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeList($index)
    {
        unset($this->codeList[$index]);
    }

    /**
     * Gets as codeList
     *
     * @return \Medidata\RwsPhp\Schema\ODM\CodeList[]
     */
    public function getCodeList()
    {
        return $this->codeList;
    }

    /**
     * Sets a new codeList
     *
     * @param \Medidata\RwsPhp\Schema\ODM\CodeList[] $codeList
     * @return self
     */
    public function setCodeList(array $codeList)
    {
        $this->codeList = $codeList;
        return $this;
    }

    /**
     * Adds as imputationMethod
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ImputationMethod $imputationMethod
     */
    public function addToImputationMethod(\Medidata\RwsPhp\Schema\ODM\ImputationMethod $imputationMethod)
    {
        $this->imputationMethod[] = $imputationMethod;
        return $this;
    }

    /**
     * isset imputationMethod
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetImputationMethod($index)
    {
        return isset($this->imputationMethod[$index]);
    }

    /**
     * unset imputationMethod
     *
     * @param scalar $index
     * @return void
     */
    public function unsetImputationMethod($index)
    {
        unset($this->imputationMethod[$index]);
    }

    /**
     * Gets as imputationMethod
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ImputationMethod[]
     */
    public function getImputationMethod()
    {
        return $this->imputationMethod;
    }

    /**
     * Sets a new imputationMethod
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ImputationMethod[] $imputationMethod
     * @return self
     */
    public function setImputationMethod(array $imputationMethod)
    {
        $this->imputationMethod = $imputationMethod;
        return $this;
    }

    /**
     * Adds as presentation
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Presentation $presentation
     */
    public function addToPresentation(\Medidata\RwsPhp\Schema\ODM\Presentation $presentation)
    {
        $this->presentation[] = $presentation;
        return $this;
    }

    /**
     * isset presentation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPresentation($index)
    {
        return isset($this->presentation[$index]);
    }

    /**
     * unset presentation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPresentation($index)
    {
        unset($this->presentation[$index]);
    }

    /**
     * Gets as presentation
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Presentation[]
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Sets a new presentation
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Presentation[] $presentation
     * @return self
     */
    public function setPresentation(array $presentation)
    {
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * Adds as conditionDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ConditionDef $conditionDef
     */
    public function addToConditionDef(\Medidata\RwsPhp\Schema\ODM\ConditionDef $conditionDef)
    {
        $this->conditionDef[] = $conditionDef;
        return $this;
    }

    /**
     * isset conditionDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConditionDef($index)
    {
        return isset($this->conditionDef[$index]);
    }

    /**
     * unset conditionDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConditionDef($index)
    {
        unset($this->conditionDef[$index]);
    }

    /**
     * Gets as conditionDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ConditionDef[]
     */
    public function getConditionDef()
    {
        return $this->conditionDef;
    }

    /**
     * Sets a new conditionDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ConditionDef[] $conditionDef
     * @return self
     */
    public function setConditionDef(array $conditionDef)
    {
        $this->conditionDef = $conditionDef;
        return $this;
    }

    /**
     * Adds as methodDef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\MethodDef $methodDef
     */
    public function addToMethodDef(\Medidata\RwsPhp\Schema\ODM\MethodDef $methodDef)
    {
        $this->methodDef[] = $methodDef;
        return $this;
    }

    /**
     * isset methodDef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMethodDef($index)
    {
        return isset($this->methodDef[$index]);
    }

    /**
     * unset methodDef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMethodDef($index)
    {
        unset($this->methodDef[$index]);
    }

    /**
     * Gets as methodDef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\MethodDef[]
     */
    public function getMethodDef()
    {
        return $this->methodDef;
    }

    /**
     * Sets a new methodDef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\MethodDef[] $methodDef
     * @return self
     */
    public function setMethodDef(array $methodDef)
    {
        $this->methodDef = $methodDef;
        return $this;
    }


}

