<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolPartialClinicalDataType
 *
 *
 * XSD Type: mdsol-PartialClinicalData
 */
class MdsolPartialClinicalDataType
{

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CodingData $codingData
     */
    private $codingData = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\Query $query
     */
    private $query = null;

    /**
     * Gets as codingData
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CodingData
     */
    public function getCodingData()
    {
        return $this->codingData;
    }

    /**
     * Sets a new codingData
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CodingData $codingData
     * @return self
     */
    public function setCodingData(\Medidata\RwsPhp\Schema\ODM\mdsol\CodingData $codingData)
    {
        $this->codingData = $codingData;
        return $this;
    }

    /**
     * Gets as query
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\Query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\Query $query
     * @return self
     */
    public function setQuery(\Medidata\RwsPhp\Schema\ODM\mdsol\Query $query)
    {
        $this->query = $query;
        return $this;
    }


}

