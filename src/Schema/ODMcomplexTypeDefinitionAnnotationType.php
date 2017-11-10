<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionAnnotationType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Annotation
 */
class ODMcomplexTypeDefinitionAnnotationType
{

    /**
     * @property integer $seqNum
     */
    private $seqNum = null;

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Comment $comment
     */
    private $comment = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\Flag[] $flag
     */
    private $flag = array(
        
    );

    /**
     * Gets as seqNum
     *
     * @return integer
     */
    public function getSeqNum()
    {
        return $this->seqNum;
    }

    /**
     * Sets a new seqNum
     *
     * @param integer $seqNum
     * @return self
     */
    public function setSeqNum($seqNum)
    {
        $this->seqNum = $seqNum;
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
     * Gets as iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as comment
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Comment $comment
     * @return self
     */
    public function setComment(\Medidata\RwsPhp\Schema\ODM\Comment $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as flag
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\Flag $flag
     */
    public function addToFlag(\Medidata\RwsPhp\Schema\ODM\Flag $flag)
    {
        $this->flag[] = $flag;
        return $this;
    }

    /**
     * isset flag
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlag($index)
    {
        return isset($this->flag[$index]);
    }

    /**
     * unset flag
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlag($index)
    {
        unset($this->flag[$index]);
    }

    /**
     * Gets as flag
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Flag[]
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Sets a new flag
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Flag[] $flag
     * @return self
     */
    public function setFlag(array $flag)
    {
        $this->flag = $flag;
        return $this;
    }


}

