<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionItemDefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ItemDef
 */
class ODMcomplexTypeDefinitionItemDefType
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
     * @property string $dataType
     */
    private $dataType = null;

    /**
     * @property integer $length
     */
    private $length = null;

    /**
     * @property integer $significantDigits
     */
    private $significantDigits = null;

    /**
     * @property string $sASFieldName
     */
    private $sASFieldName = null;

    /**
     * @property string $sDSVarName
     */
    private $sDSVarName = null;

    /**
     * @property string $origin
     */
    private $origin = null;

    /**
     * @property string $comment
     */
    private $comment = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Question $question
     */
    private $question = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ExternalQuestion $externalQuestion
     */
    private $externalQuestion = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef[] $measurementUnitRef
     */
    private $measurementUnitRef = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\RangeCheck[] $rangeCheck
     */
    private $rangeCheck = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\CodeListRef $codeListRef
     */
    private $codeListRef = null;

    /**
     * @property string[] $role
     */
    private $role = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Alias[] $alias
     */
    private $alias = array(
        
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
     * Gets as dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets a new dataType
     *
     * @param string $dataType
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param integer $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as significantDigits
     *
     * @return integer
     */
    public function getSignificantDigits()
    {
        return $this->significantDigits;
    }

    /**
     * Sets a new significantDigits
     *
     * @param integer $significantDigits
     * @return self
     */
    public function setSignificantDigits($significantDigits)
    {
        $this->significantDigits = $significantDigits;
        return $this;
    }

    /**
     * Gets as sASFieldName
     *
     * @return string
     */
    public function getSASFieldName()
    {
        return $this->sASFieldName;
    }

    /**
     * Sets a new sASFieldName
     *
     * @param string $sASFieldName
     * @return self
     */
    public function setSASFieldName($sASFieldName)
    {
        $this->sASFieldName = $sASFieldName;
        return $this;
    }

    /**
     * Gets as sDSVarName
     *
     * @return string
     */
    public function getSDSVarName()
    {
        return $this->sDSVarName;
    }

    /**
     * Sets a new sDSVarName
     *
     * @param string $sDSVarName
     * @return self
     */
    public function setSDSVarName($sDSVarName)
    {
        $this->sDSVarName = $sDSVarName;
        return $this;
    }

    /**
     * Gets as origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * @param string $origin
     * @return self
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

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
     * Gets as question
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets a new question
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Question $question
     * @return self
     */
    public function setQuestion(\Medidata\RwsPhp\Schema\ODM\Question $question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Gets as externalQuestion
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ExternalQuestion
     */
    public function getExternalQuestion()
    {
        return $this->externalQuestion;
    }

    /**
     * Sets a new externalQuestion
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ExternalQuestion $externalQuestion
     * @return self
     */
    public function setExternalQuestion(\Medidata\RwsPhp\Schema\ODM\ExternalQuestion $externalQuestion)
    {
        $this->externalQuestion = $externalQuestion;
        return $this;
    }

    /**
     * Adds as measurementUnitRef
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef $measurementUnitRef
     */
    public function addToMeasurementUnitRef(\Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef $measurementUnitRef)
    {
        $this->measurementUnitRef[] = $measurementUnitRef;
        return $this;
    }

    /**
     * isset measurementUnitRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMeasurementUnitRef($index)
    {
        return isset($this->measurementUnitRef[$index]);
    }

    /**
     * unset measurementUnitRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMeasurementUnitRef($index)
    {
        unset($this->measurementUnitRef[$index]);
    }

    /**
     * Gets as measurementUnitRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef[]
     */
    public function getMeasurementUnitRef()
    {
        return $this->measurementUnitRef;
    }

    /**
     * Sets a new measurementUnitRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\MeasurementUnitRef[] $measurementUnitRef
     * @return self
     */
    public function setMeasurementUnitRef(array $measurementUnitRef)
    {
        $this->measurementUnitRef = $measurementUnitRef;
        return $this;
    }

    /**
     * Adds as rangeCheck
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\RangeCheck $rangeCheck
     */
    public function addToRangeCheck(\Medidata\RwsPhp\Schema\ODM\RangeCheck $rangeCheck)
    {
        $this->rangeCheck[] = $rangeCheck;
        return $this;
    }

    /**
     * isset rangeCheck
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRangeCheck($index)
    {
        return isset($this->rangeCheck[$index]);
    }

    /**
     * unset rangeCheck
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRangeCheck($index)
    {
        unset($this->rangeCheck[$index]);
    }

    /**
     * Gets as rangeCheck
     *
     * @return \Medidata\RwsPhp\Schema\ODM\RangeCheck[]
     */
    public function getRangeCheck()
    {
        return $this->rangeCheck;
    }

    /**
     * Sets a new rangeCheck
     *
     * @param \Medidata\RwsPhp\Schema\ODM\RangeCheck[] $rangeCheck
     * @return self
     */
    public function setRangeCheck(array $rangeCheck)
    {
        $this->rangeCheck = $rangeCheck;
        return $this;
    }

    /**
     * Gets as codeListRef
     *
     * @return \Medidata\RwsPhp\Schema\ODM\CodeListRef
     */
    public function getCodeListRef()
    {
        return $this->codeListRef;
    }

    /**
     * Sets a new codeListRef
     *
     * @param \Medidata\RwsPhp\Schema\ODM\CodeListRef $codeListRef
     * @return self
     */
    public function setCodeListRef(\Medidata\RwsPhp\Schema\ODM\CodeListRef $codeListRef)
    {
        $this->codeListRef = $codeListRef;
        return $this;
    }

    /**
     * Adds as role
     *
     * @return self
     * @param string $role
     */
    public function addToRole($role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * @return string[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * @param string $role
     * @return self
     */
    public function setRole(array $role)
    {
        $this->role = $role;
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

