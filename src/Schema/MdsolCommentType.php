<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolCommentType
 *
 *
 * XSD Type: mdsol-Comment
 */
class MdsolCommentType
{

    /**
     * @property string $commentRepeatKey
     */
    private $commentRepeatKey = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as commentRepeatKey
     *
     * @return string
     */
    public function getCommentRepeatKey()
    {
        return $this->commentRepeatKey;
    }

    /**
     * Sets a new commentRepeatKey
     *
     * @param string $commentRepeatKey
     * @return self
     */
    public function setCommentRepeatKey($commentRepeatKey)
    {
        $this->commentRepeatKey = $commentRepeatKey;
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
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

