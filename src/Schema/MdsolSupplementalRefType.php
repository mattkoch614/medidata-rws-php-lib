<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolSupplementalRefType
 *
 *
 * XSD Type: mdsol-SupplementalRef
 */
class MdsolSupplementalRefType
{

    /**
     * @property string $itemRef
     */
    private $itemRef = null;

    /**
     * Gets as itemRef
     *
     * @return string
     */
    public function getItemRef()
    {
        return $this->itemRef;
    }

    /**
     * Sets a new itemRef
     *
     * @param string $itemRef
     * @return self
     */
    public function setItemRef($itemRef)
    {
        $this->itemRef = $itemRef;
        return $this;
    }


}

