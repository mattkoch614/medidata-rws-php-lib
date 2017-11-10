<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionItemGroupDataType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ItemGroupData
 */
class ODMcomplexTypeDefinitionItemGroupDataType
{

    /**
     * @property string $itemGroupOID
     */
    private $itemGroupOID = null;

    /**
     * @property string $itemGroupRepeatKey
     */
    private $itemGroupRepeatKey = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     */
    private $auditRecord = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Signature $signature
     */
    private $signature = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     */
    private $annotation = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemData[] $itemData
     */
    private $itemData = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataURI[] $itemDataURI
     */
    private $itemDataURI = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataAny[] $itemDataAny
     */
    private $itemDataAny = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataBoolean[] $itemDataBoolean
     */
    private $itemDataBoolean = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataString[] $itemDataString
     */
    private $itemDataString = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataInteger[] $itemDataInteger
     */
    private $itemDataInteger = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataFloat[] $itemDataFloat
     */
    private $itemDataFloat = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataDouble[] $itemDataDouble
     */
    private $itemDataDouble = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataDate[] $itemDataDate
     */
    private $itemDataDate = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataTime[] $itemDataTime
     */
    private $itemDataTime = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataDatetime[] $itemDataDatetime
     */
    private $itemDataDatetime = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataHexBinary[] $itemDataHexBinary
     */
    private $itemDataHexBinary = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Binary[]
     * $itemDataBase64Binary
     */
    private $itemDataBase64Binary = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataHexFloat[] $itemDataHexFloat
     */
    private $itemDataHexFloat = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Float[] $itemDataBase64Float
     */
    private $itemDataBase64Float = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDate[] $itemDataPartialDate
     */
    private $itemDataPartialDate = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataPartialTime[] $itemDataPartialTime
     */
    private $itemDataPartialTime = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDatetime[]
     * $itemDataPartialDatetime
     */
    private $itemDataPartialDatetime = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataDurationDatetime[]
     * $itemDataDurationDatetime
     */
    private $itemDataDurationDatetime = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataIntervalDatetime[]
     * $itemDataIntervalDatetime
     */
    private $itemDataIntervalDatetime = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDatetime[]
     * $itemDataIncompleteDatetime
     */
    private $itemDataIncompleteDatetime = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDate[]
     * $itemDataIncompleteDate
     */
    private $itemDataIncompleteDate = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteTime[]
     * $itemDataIncompleteTime
     */
    private $itemDataIncompleteTime = array(
        
    );

    /**
     * Gets as itemGroupOID
     *
     * @return string
     */
    public function getItemGroupOID()
    {
        return $this->itemGroupOID;
    }

    /**
     * Sets a new itemGroupOID
     *
     * @param string $itemGroupOID
     * @return self
     */
    public function setItemGroupOID($itemGroupOID)
    {
        $this->itemGroupOID = $itemGroupOID;
        return $this;
    }

    /**
     * Gets as itemGroupRepeatKey
     *
     * @return string
     */
    public function getItemGroupRepeatKey()
    {
        return $this->itemGroupRepeatKey;
    }

    /**
     * Sets a new itemGroupRepeatKey
     *
     * @param string $itemGroupRepeatKey
     * @return self
     */
    public function setItemGroupRepeatKey($itemGroupRepeatKey)
    {
        $this->itemGroupRepeatKey = $itemGroupRepeatKey;
        return $this;
    }

    /**
     * Gets as transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Sets a new transactionType
     *
     * @param string $transactionType
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * Gets as auditRecord
     *
     * @return \Medidata\RwsPhp\Schema\ODM\AuditRecord
     */
    public function getAuditRecord()
    {
        return $this->auditRecord;
    }

    /**
     * Sets a new auditRecord
     *
     * @param \Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord
     * @return self
     */
    public function setAuditRecord(\Medidata\RwsPhp\Schema\ODM\AuditRecord $auditRecord)
    {
        $this->auditRecord = $auditRecord;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Signature $signature
     * @return self
     */
    public function setSignature(\Medidata\RwsPhp\Schema\ODM\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation $annotation
     */
    public function addToAnnotation(\Medidata\RwsPhp\Schema\ODM\Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }

    /**
     * Adds as itemData
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemData $itemData
     */
    public function addToItemData(\Medidata\RwsPhp\Schema\ODM\ItemData $itemData)
    {
        $this->itemData[] = $itemData;
        return $this;
    }

    /**
     * isset itemData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemData($index)
    {
        return isset($this->itemData[$index]);
    }

    /**
     * unset itemData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemData($index)
    {
        unset($this->itemData[$index]);
    }

    /**
     * Gets as itemData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemData[]
     */
    public function getItemData()
    {
        return $this->itemData;
    }

    /**
     * Sets a new itemData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemData[] $itemData
     * @return self
     */
    public function setItemData(array $itemData)
    {
        $this->itemData = $itemData;
        return $this;
    }

    /**
     * Adds as itemDataURI
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataURI $itemDataURI
     */
    public function addToItemDataURI(\Medidata\RwsPhp\Schema\ODM\ItemDataURI $itemDataURI)
    {
        $this->itemDataURI[] = $itemDataURI;
        return $this;
    }

    /**
     * isset itemDataURI
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataURI($index)
    {
        return isset($this->itemDataURI[$index]);
    }

    /**
     * unset itemDataURI
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataURI($index)
    {
        unset($this->itemDataURI[$index]);
    }

    /**
     * Gets as itemDataURI
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataURI[]
     */
    public function getItemDataURI()
    {
        return $this->itemDataURI;
    }

    /**
     * Sets a new itemDataURI
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataURI[] $itemDataURI
     * @return self
     */
    public function setItemDataURI(array $itemDataURI)
    {
        $this->itemDataURI = $itemDataURI;
        return $this;
    }

    /**
     * Adds as itemDataAny
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataAny $itemDataAny
     */
    public function addToItemDataAny(\Medidata\RwsPhp\Schema\ODM\ItemDataAny $itemDataAny)
    {
        $this->itemDataAny[] = $itemDataAny;
        return $this;
    }

    /**
     * isset itemDataAny
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataAny($index)
    {
        return isset($this->itemDataAny[$index]);
    }

    /**
     * unset itemDataAny
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataAny($index)
    {
        unset($this->itemDataAny[$index]);
    }

    /**
     * Gets as itemDataAny
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataAny[]
     */
    public function getItemDataAny()
    {
        return $this->itemDataAny;
    }

    /**
     * Sets a new itemDataAny
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataAny[] $itemDataAny
     * @return self
     */
    public function setItemDataAny(array $itemDataAny)
    {
        $this->itemDataAny = $itemDataAny;
        return $this;
    }

    /**
     * Adds as itemDataBoolean
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataBoolean $itemDataBoolean
     */
    public function addToItemDataBoolean(\Medidata\RwsPhp\Schema\ODM\ItemDataBoolean $itemDataBoolean)
    {
        $this->itemDataBoolean[] = $itemDataBoolean;
        return $this;
    }

    /**
     * isset itemDataBoolean
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataBoolean($index)
    {
        return isset($this->itemDataBoolean[$index]);
    }

    /**
     * unset itemDataBoolean
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataBoolean($index)
    {
        unset($this->itemDataBoolean[$index]);
    }

    /**
     * Gets as itemDataBoolean
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataBoolean[]
     */
    public function getItemDataBoolean()
    {
        return $this->itemDataBoolean;
    }

    /**
     * Sets a new itemDataBoolean
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataBoolean[] $itemDataBoolean
     * @return self
     */
    public function setItemDataBoolean(array $itemDataBoolean)
    {
        $this->itemDataBoolean = $itemDataBoolean;
        return $this;
    }

    /**
     * Adds as itemDataString
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataString $itemDataString
     */
    public function addToItemDataString(\Medidata\RwsPhp\Schema\ODM\ItemDataString $itemDataString)
    {
        $this->itemDataString[] = $itemDataString;
        return $this;
    }

    /**
     * isset itemDataString
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataString($index)
    {
        return isset($this->itemDataString[$index]);
    }

    /**
     * unset itemDataString
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataString($index)
    {
        unset($this->itemDataString[$index]);
    }

    /**
     * Gets as itemDataString
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataString[]
     */
    public function getItemDataString()
    {
        return $this->itemDataString;
    }

    /**
     * Sets a new itemDataString
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataString[] $itemDataString
     * @return self
     */
    public function setItemDataString(array $itemDataString)
    {
        $this->itemDataString = $itemDataString;
        return $this;
    }

    /**
     * Adds as itemDataInteger
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataInteger $itemDataInteger
     */
    public function addToItemDataInteger(\Medidata\RwsPhp\Schema\ODM\ItemDataInteger $itemDataInteger)
    {
        $this->itemDataInteger[] = $itemDataInteger;
        return $this;
    }

    /**
     * isset itemDataInteger
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataInteger($index)
    {
        return isset($this->itemDataInteger[$index]);
    }

    /**
     * unset itemDataInteger
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataInteger($index)
    {
        unset($this->itemDataInteger[$index]);
    }

    /**
     * Gets as itemDataInteger
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataInteger[]
     */
    public function getItemDataInteger()
    {
        return $this->itemDataInteger;
    }

    /**
     * Sets a new itemDataInteger
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataInteger[] $itemDataInteger
     * @return self
     */
    public function setItemDataInteger(array $itemDataInteger)
    {
        $this->itemDataInteger = $itemDataInteger;
        return $this;
    }

    /**
     * Adds as itemDataFloat
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataFloat $itemDataFloat
     */
    public function addToItemDataFloat(\Medidata\RwsPhp\Schema\ODM\ItemDataFloat $itemDataFloat)
    {
        $this->itemDataFloat[] = $itemDataFloat;
        return $this;
    }

    /**
     * isset itemDataFloat
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataFloat($index)
    {
        return isset($this->itemDataFloat[$index]);
    }

    /**
     * unset itemDataFloat
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataFloat($index)
    {
        unset($this->itemDataFloat[$index]);
    }

    /**
     * Gets as itemDataFloat
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataFloat[]
     */
    public function getItemDataFloat()
    {
        return $this->itemDataFloat;
    }

    /**
     * Sets a new itemDataFloat
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataFloat[] $itemDataFloat
     * @return self
     */
    public function setItemDataFloat(array $itemDataFloat)
    {
        $this->itemDataFloat = $itemDataFloat;
        return $this;
    }

    /**
     * Adds as itemDataDouble
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDouble $itemDataDouble
     */
    public function addToItemDataDouble(\Medidata\RwsPhp\Schema\ODM\ItemDataDouble $itemDataDouble)
    {
        $this->itemDataDouble[] = $itemDataDouble;
        return $this;
    }

    /**
     * isset itemDataDouble
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataDouble($index)
    {
        return isset($this->itemDataDouble[$index]);
    }

    /**
     * unset itemDataDouble
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataDouble($index)
    {
        unset($this->itemDataDouble[$index]);
    }

    /**
     * Gets as itemDataDouble
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataDouble[]
     */
    public function getItemDataDouble()
    {
        return $this->itemDataDouble;
    }

    /**
     * Sets a new itemDataDouble
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDouble[] $itemDataDouble
     * @return self
     */
    public function setItemDataDouble(array $itemDataDouble)
    {
        $this->itemDataDouble = $itemDataDouble;
        return $this;
    }

    /**
     * Adds as itemDataDate
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDate $itemDataDate
     */
    public function addToItemDataDate(\Medidata\RwsPhp\Schema\ODM\ItemDataDate $itemDataDate)
    {
        $this->itemDataDate[] = $itemDataDate;
        return $this;
    }

    /**
     * isset itemDataDate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataDate($index)
    {
        return isset($this->itemDataDate[$index]);
    }

    /**
     * unset itemDataDate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataDate($index)
    {
        unset($this->itemDataDate[$index]);
    }

    /**
     * Gets as itemDataDate
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataDate[]
     */
    public function getItemDataDate()
    {
        return $this->itemDataDate;
    }

    /**
     * Sets a new itemDataDate
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDate[] $itemDataDate
     * @return self
     */
    public function setItemDataDate(array $itemDataDate)
    {
        $this->itemDataDate = $itemDataDate;
        return $this;
    }

    /**
     * Adds as itemDataTime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataTime $itemDataTime
     */
    public function addToItemDataTime(\Medidata\RwsPhp\Schema\ODM\ItemDataTime $itemDataTime)
    {
        $this->itemDataTime[] = $itemDataTime;
        return $this;
    }

    /**
     * isset itemDataTime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataTime($index)
    {
        return isset($this->itemDataTime[$index]);
    }

    /**
     * unset itemDataTime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataTime($index)
    {
        unset($this->itemDataTime[$index]);
    }

    /**
     * Gets as itemDataTime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataTime[]
     */
    public function getItemDataTime()
    {
        return $this->itemDataTime;
    }

    /**
     * Sets a new itemDataTime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataTime[] $itemDataTime
     * @return self
     */
    public function setItemDataTime(array $itemDataTime)
    {
        $this->itemDataTime = $itemDataTime;
        return $this;
    }

    /**
     * Adds as itemDataDatetime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDatetime $itemDataDatetime
     */
    public function addToItemDataDatetime(\Medidata\RwsPhp\Schema\ODM\ItemDataDatetime $itemDataDatetime)
    {
        $this->itemDataDatetime[] = $itemDataDatetime;
        return $this;
    }

    /**
     * isset itemDataDatetime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataDatetime($index)
    {
        return isset($this->itemDataDatetime[$index]);
    }

    /**
     * unset itemDataDatetime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataDatetime($index)
    {
        unset($this->itemDataDatetime[$index]);
    }

    /**
     * Gets as itemDataDatetime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataDatetime[]
     */
    public function getItemDataDatetime()
    {
        return $this->itemDataDatetime;
    }

    /**
     * Sets a new itemDataDatetime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDatetime[] $itemDataDatetime
     * @return self
     */
    public function setItemDataDatetime(array $itemDataDatetime)
    {
        $this->itemDataDatetime = $itemDataDatetime;
        return $this;
    }

    /**
     * Adds as itemDataHexBinary
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataHexBinary $itemDataHexBinary
     */
    public function addToItemDataHexBinary(\Medidata\RwsPhp\Schema\ODM\ItemDataHexBinary $itemDataHexBinary)
    {
        $this->itemDataHexBinary[] = $itemDataHexBinary;
        return $this;
    }

    /**
     * isset itemDataHexBinary
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataHexBinary($index)
    {
        return isset($this->itemDataHexBinary[$index]);
    }

    /**
     * unset itemDataHexBinary
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataHexBinary($index)
    {
        unset($this->itemDataHexBinary[$index]);
    }

    /**
     * Gets as itemDataHexBinary
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataHexBinary[]
     */
    public function getItemDataHexBinary()
    {
        return $this->itemDataHexBinary;
    }

    /**
     * Sets a new itemDataHexBinary
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataHexBinary[] $itemDataHexBinary
     * @return self
     */
    public function setItemDataHexBinary(array $itemDataHexBinary)
    {
        $this->itemDataHexBinary = $itemDataHexBinary;
        return $this;
    }

    /**
     * Adds as itemDataBase64Binary
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Binary $itemDataBase64Binary
     */
    public function addToItemDataBase64Binary(\Medidata\RwsPhp\Schema\ODM\ItemDataBase64Binary $itemDataBase64Binary)
    {
        $this->itemDataBase64Binary[] = $itemDataBase64Binary;
        return $this;
    }

    /**
     * isset itemDataBase64Binary
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataBase64Binary($index)
    {
        return isset($this->itemDataBase64Binary[$index]);
    }

    /**
     * unset itemDataBase64Binary
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataBase64Binary($index)
    {
        unset($this->itemDataBase64Binary[$index]);
    }

    /**
     * Gets as itemDataBase64Binary
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Binary[]
     */
    public function getItemDataBase64Binary()
    {
        return $this->itemDataBase64Binary;
    }

    /**
     * Sets a new itemDataBase64Binary
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Binary[] $itemDataBase64Binary
     * @return self
     */
    public function setItemDataBase64Binary(array $itemDataBase64Binary)
    {
        $this->itemDataBase64Binary = $itemDataBase64Binary;
        return $this;
    }

    /**
     * Adds as itemDataHexFloat
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataHexFloat $itemDataHexFloat
     */
    public function addToItemDataHexFloat(\Medidata\RwsPhp\Schema\ODM\ItemDataHexFloat $itemDataHexFloat)
    {
        $this->itemDataHexFloat[] = $itemDataHexFloat;
        return $this;
    }

    /**
     * isset itemDataHexFloat
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataHexFloat($index)
    {
        return isset($this->itemDataHexFloat[$index]);
    }

    /**
     * unset itemDataHexFloat
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataHexFloat($index)
    {
        unset($this->itemDataHexFloat[$index]);
    }

    /**
     * Gets as itemDataHexFloat
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataHexFloat[]
     */
    public function getItemDataHexFloat()
    {
        return $this->itemDataHexFloat;
    }

    /**
     * Sets a new itemDataHexFloat
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataHexFloat[] $itemDataHexFloat
     * @return self
     */
    public function setItemDataHexFloat(array $itemDataHexFloat)
    {
        $this->itemDataHexFloat = $itemDataHexFloat;
        return $this;
    }

    /**
     * Adds as itemDataBase64Float
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Float $itemDataBase64Float
     */
    public function addToItemDataBase64Float(\Medidata\RwsPhp\Schema\ODM\ItemDataBase64Float $itemDataBase64Float)
    {
        $this->itemDataBase64Float[] = $itemDataBase64Float;
        return $this;
    }

    /**
     * isset itemDataBase64Float
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataBase64Float($index)
    {
        return isset($this->itemDataBase64Float[$index]);
    }

    /**
     * unset itemDataBase64Float
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataBase64Float($index)
    {
        unset($this->itemDataBase64Float[$index]);
    }

    /**
     * Gets as itemDataBase64Float
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Float[]
     */
    public function getItemDataBase64Float()
    {
        return $this->itemDataBase64Float;
    }

    /**
     * Sets a new itemDataBase64Float
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataBase64Float[] $itemDataBase64Float
     * @return self
     */
    public function setItemDataBase64Float(array $itemDataBase64Float)
    {
        $this->itemDataBase64Float = $itemDataBase64Float;
        return $this;
    }

    /**
     * Adds as itemDataPartialDate
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDate $itemDataPartialDate
     */
    public function addToItemDataPartialDate(\Medidata\RwsPhp\Schema\ODM\ItemDataPartialDate $itemDataPartialDate)
    {
        $this->itemDataPartialDate[] = $itemDataPartialDate;
        return $this;
    }

    /**
     * isset itemDataPartialDate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataPartialDate($index)
    {
        return isset($this->itemDataPartialDate[$index]);
    }

    /**
     * unset itemDataPartialDate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataPartialDate($index)
    {
        unset($this->itemDataPartialDate[$index]);
    }

    /**
     * Gets as itemDataPartialDate
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDate[]
     */
    public function getItemDataPartialDate()
    {
        return $this->itemDataPartialDate;
    }

    /**
     * Sets a new itemDataPartialDate
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDate[] $itemDataPartialDate
     * @return self
     */
    public function setItemDataPartialDate(array $itemDataPartialDate)
    {
        $this->itemDataPartialDate = $itemDataPartialDate;
        return $this;
    }

    /**
     * Adds as itemDataPartialTime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataPartialTime $itemDataPartialTime
     */
    public function addToItemDataPartialTime(\Medidata\RwsPhp\Schema\ODM\ItemDataPartialTime $itemDataPartialTime)
    {
        $this->itemDataPartialTime[] = $itemDataPartialTime;
        return $this;
    }

    /**
     * isset itemDataPartialTime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataPartialTime($index)
    {
        return isset($this->itemDataPartialTime[$index]);
    }

    /**
     * unset itemDataPartialTime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataPartialTime($index)
    {
        unset($this->itemDataPartialTime[$index]);
    }

    /**
     * Gets as itemDataPartialTime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataPartialTime[]
     */
    public function getItemDataPartialTime()
    {
        return $this->itemDataPartialTime;
    }

    /**
     * Sets a new itemDataPartialTime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataPartialTime[] $itemDataPartialTime
     * @return self
     */
    public function setItemDataPartialTime(array $itemDataPartialTime)
    {
        $this->itemDataPartialTime = $itemDataPartialTime;
        return $this;
    }

    /**
     * Adds as itemDataPartialDatetime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDatetime
     * $itemDataPartialDatetime
     */
    public function addToItemDataPartialDatetime(\Medidata\RwsPhp\Schema\ODM\ItemDataPartialDatetime $itemDataPartialDatetime)
    {
        $this->itemDataPartialDatetime[] = $itemDataPartialDatetime;
        return $this;
    }

    /**
     * isset itemDataPartialDatetime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataPartialDatetime($index)
    {
        return isset($this->itemDataPartialDatetime[$index]);
    }

    /**
     * unset itemDataPartialDatetime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataPartialDatetime($index)
    {
        unset($this->itemDataPartialDatetime[$index]);
    }

    /**
     * Gets as itemDataPartialDatetime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDatetime[]
     */
    public function getItemDataPartialDatetime()
    {
        return $this->itemDataPartialDatetime;
    }

    /**
     * Sets a new itemDataPartialDatetime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataPartialDatetime[]
     * $itemDataPartialDatetime
     * @return self
     */
    public function setItemDataPartialDatetime(array $itemDataPartialDatetime)
    {
        $this->itemDataPartialDatetime = $itemDataPartialDatetime;
        return $this;
    }

    /**
     * Adds as itemDataDurationDatetime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDurationDatetime
     * $itemDataDurationDatetime
     */
    public function addToItemDataDurationDatetime(\Medidata\RwsPhp\Schema\ODM\ItemDataDurationDatetime $itemDataDurationDatetime)
    {
        $this->itemDataDurationDatetime[] = $itemDataDurationDatetime;
        return $this;
    }

    /**
     * isset itemDataDurationDatetime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataDurationDatetime($index)
    {
        return isset($this->itemDataDurationDatetime[$index]);
    }

    /**
     * unset itemDataDurationDatetime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataDurationDatetime($index)
    {
        unset($this->itemDataDurationDatetime[$index]);
    }

    /**
     * Gets as itemDataDurationDatetime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataDurationDatetime[]
     */
    public function getItemDataDurationDatetime()
    {
        return $this->itemDataDurationDatetime;
    }

    /**
     * Sets a new itemDataDurationDatetime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataDurationDatetime[]
     * $itemDataDurationDatetime
     * @return self
     */
    public function setItemDataDurationDatetime(array $itemDataDurationDatetime)
    {
        $this->itemDataDurationDatetime = $itemDataDurationDatetime;
        return $this;
    }

    /**
     * Adds as itemDataIntervalDatetime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIntervalDatetime
     * $itemDataIntervalDatetime
     */
    public function addToItemDataIntervalDatetime(\Medidata\RwsPhp\Schema\ODM\ItemDataIntervalDatetime $itemDataIntervalDatetime)
    {
        $this->itemDataIntervalDatetime[] = $itemDataIntervalDatetime;
        return $this;
    }

    /**
     * isset itemDataIntervalDatetime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataIntervalDatetime($index)
    {
        return isset($this->itemDataIntervalDatetime[$index]);
    }

    /**
     * unset itemDataIntervalDatetime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataIntervalDatetime($index)
    {
        unset($this->itemDataIntervalDatetime[$index]);
    }

    /**
     * Gets as itemDataIntervalDatetime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataIntervalDatetime[]
     */
    public function getItemDataIntervalDatetime()
    {
        return $this->itemDataIntervalDatetime;
    }

    /**
     * Sets a new itemDataIntervalDatetime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIntervalDatetime[]
     * $itemDataIntervalDatetime
     * @return self
     */
    public function setItemDataIntervalDatetime(array $itemDataIntervalDatetime)
    {
        $this->itemDataIntervalDatetime = $itemDataIntervalDatetime;
        return $this;
    }

    /**
     * Adds as itemDataIncompleteDatetime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDatetime
     * $itemDataIncompleteDatetime
     */
    public function addToItemDataIncompleteDatetime(\Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDatetime $itemDataIncompleteDatetime)
    {
        $this->itemDataIncompleteDatetime[] = $itemDataIncompleteDatetime;
        return $this;
    }

    /**
     * isset itemDataIncompleteDatetime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataIncompleteDatetime($index)
    {
        return isset($this->itemDataIncompleteDatetime[$index]);
    }

    /**
     * unset itemDataIncompleteDatetime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataIncompleteDatetime($index)
    {
        unset($this->itemDataIncompleteDatetime[$index]);
    }

    /**
     * Gets as itemDataIncompleteDatetime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDatetime[]
     */
    public function getItemDataIncompleteDatetime()
    {
        return $this->itemDataIncompleteDatetime;
    }

    /**
     * Sets a new itemDataIncompleteDatetime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDatetime[]
     * $itemDataIncompleteDatetime
     * @return self
     */
    public function setItemDataIncompleteDatetime(array $itemDataIncompleteDatetime)
    {
        $this->itemDataIncompleteDatetime = $itemDataIncompleteDatetime;
        return $this;
    }

    /**
     * Adds as itemDataIncompleteDate
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDate
     * $itemDataIncompleteDate
     */
    public function addToItemDataIncompleteDate(\Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDate $itemDataIncompleteDate)
    {
        $this->itemDataIncompleteDate[] = $itemDataIncompleteDate;
        return $this;
    }

    /**
     * isset itemDataIncompleteDate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataIncompleteDate($index)
    {
        return isset($this->itemDataIncompleteDate[$index]);
    }

    /**
     * unset itemDataIncompleteDate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataIncompleteDate($index)
    {
        unset($this->itemDataIncompleteDate[$index]);
    }

    /**
     * Gets as itemDataIncompleteDate
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDate[]
     */
    public function getItemDataIncompleteDate()
    {
        return $this->itemDataIncompleteDate;
    }

    /**
     * Sets a new itemDataIncompleteDate
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteDate[]
     * $itemDataIncompleteDate
     * @return self
     */
    public function setItemDataIncompleteDate(array $itemDataIncompleteDate)
    {
        $this->itemDataIncompleteDate = $itemDataIncompleteDate;
        return $this;
    }

    /**
     * Adds as itemDataIncompleteTime
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteTime
     * $itemDataIncompleteTime
     */
    public function addToItemDataIncompleteTime(\Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteTime $itemDataIncompleteTime)
    {
        $this->itemDataIncompleteTime[] = $itemDataIncompleteTime;
        return $this;
    }

    /**
     * isset itemDataIncompleteTime
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemDataIncompleteTime($index)
    {
        return isset($this->itemDataIncompleteTime[$index]);
    }

    /**
     * unset itemDataIncompleteTime
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemDataIncompleteTime($index)
    {
        unset($this->itemDataIncompleteTime[$index]);
    }

    /**
     * Gets as itemDataIncompleteTime
     *
     * @return \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteTime[]
     */
    public function getItemDataIncompleteTime()
    {
        return $this->itemDataIncompleteTime;
    }

    /**
     * Sets a new itemDataIncompleteTime
     *
     * @param \Medidata\RwsPhp\Schema\ODM\ItemDataIncompleteTime[]
     * $itemDataIncompleteTime
     * @return self
     */
    public function setItemDataIncompleteTime(array $itemDataIncompleteTime)
    {
        $this->itemDataIncompleteTime = $itemDataIncompleteTime;
        return $this;
    }


}

