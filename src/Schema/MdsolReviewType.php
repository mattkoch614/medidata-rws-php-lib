<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolReviewType
 *
 *
 * XSD Type: mdsol-Review
 */
class MdsolReviewType
{

    /**
     * @property string $reviewed
     */
    private $reviewed = null;

    /**
     * @property string $groupName
     */
    private $groupName = null;

    /**
     * Gets as reviewed
     *
     * @return string
     */
    public function getReviewed()
    {
        return $this->reviewed;
    }

    /**
     * Sets a new reviewed
     *
     * @param string $reviewed
     * @return self
     */
    public function setReviewed($reviewed)
    {
        $this->reviewed = $reviewed;
        return $this;
    }

    /**
     * Gets as groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Sets a new groupName
     *
     * @param string $groupName
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }


}

