<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionItemRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ItemRef
 */
class ODMcomplexTypeDefinitionItemRefType
{

    /**
     * @property string $itemOID
     */
    private $itemOID = null;

    /**
     * @property integer $keySequence
     */
    private $keySequence = null;

    /**
     * @property string $methodOID
     */
    private $methodOID = null;

    /**
     * @property string $imputationMethodOID
     */
    private $imputationMethodOID = null;

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property string $roleCodeListOID
     */
    private $roleCodeListOID = null;

    /**
     * @property integer $orderNumber
     */
    private $orderNumber = null;

    /**
     * @property string $mandatory
     */
    private $mandatory = null;

    /**
     * @property string $collectionExceptionConditionOID
     */
    private $collectionExceptionConditionOID = null;

    /**
     * Gets as itemOID
     *
     * @return string
     */
    public function getItemOID()
    {
        return $this->itemOID;
    }

    /**
     * Sets a new itemOID
     *
     * @param string $itemOID
     * @return self
     */
    public function setItemOID($itemOID)
    {
        $this->itemOID = $itemOID;
        return $this;
    }

    /**
     * Gets as keySequence
     *
     * @return integer
     */
    public function getKeySequence()
    {
        return $this->keySequence;
    }

    /**
     * Sets a new keySequence
     *
     * @param integer $keySequence
     * @return self
     */
    public function setKeySequence($keySequence)
    {
        $this->keySequence = $keySequence;
        return $this;
    }

    /**
     * Gets as methodOID
     *
     * @return string
     */
    public function getMethodOID()
    {
        return $this->methodOID;
    }

    /**
     * Sets a new methodOID
     *
     * @param string $methodOID
     * @return self
     */
    public function setMethodOID($methodOID)
    {
        $this->methodOID = $methodOID;
        return $this;
    }

    /**
     * Gets as imputationMethodOID
     *
     * @return string
     */
    public function getImputationMethodOID()
    {
        return $this->imputationMethodOID;
    }

    /**
     * Sets a new imputationMethodOID
     *
     * @param string $imputationMethodOID
     * @return self
     */
    public function setImputationMethodOID($imputationMethodOID)
    {
        $this->imputationMethodOID = $imputationMethodOID;
        return $this;
    }

    /**
     * Gets as role
     *
     * @return string
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
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as roleCodeListOID
     *
     * @return string
     */
    public function getRoleCodeListOID()
    {
        return $this->roleCodeListOID;
    }

    /**
     * Sets a new roleCodeListOID
     *
     * @param string $roleCodeListOID
     * @return self
     */
    public function setRoleCodeListOID($roleCodeListOID)
    {
        $this->roleCodeListOID = $roleCodeListOID;
        return $this;
    }

    /**
     * Gets as orderNumber
     *
     * @return integer
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Sets a new orderNumber
     *
     * @param integer $orderNumber
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * Gets as mandatory
     *
     * @return string
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Sets a new mandatory
     *
     * @param string $mandatory
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
        return $this;
    }

    /**
     * Gets as collectionExceptionConditionOID
     *
     * @return string
     */
    public function getCollectionExceptionConditionOID()
    {
        return $this->collectionExceptionConditionOID;
    }

    /**
     * Sets a new collectionExceptionConditionOID
     *
     * @param string $collectionExceptionConditionOID
     * @return self
     */
    public function setCollectionExceptionConditionOID($collectionExceptionConditionOID)
    {
        $this->collectionExceptionConditionOID = $collectionExceptionConditionOID;
        return $this;
    }


}

