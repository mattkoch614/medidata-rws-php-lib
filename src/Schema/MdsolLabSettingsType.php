<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolLabSettingsType
 *
 *
 * XSD Type: mdsol-LabSettings
 */
class MdsolLabSettingsType
{

    /**
     * @property string $standardUnits
     */
    private $standardUnits = null;

    /**
     * @property string $referenceLabs
     */
    private $referenceLabs = null;

    /**
     * @property string $alertLabs
     */
    private $alertLabs = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping[]
     * $labVariableMapping
     */
    private $labVariableMapping = array(
        
    );

    /**
     * Gets as standardUnits
     *
     * @return string
     */
    public function getStandardUnits()
    {
        return $this->standardUnits;
    }

    /**
     * Sets a new standardUnits
     *
     * @param string $standardUnits
     * @return self
     */
    public function setStandardUnits($standardUnits)
    {
        $this->standardUnits = $standardUnits;
        return $this;
    }

    /**
     * Gets as referenceLabs
     *
     * @return string
     */
    public function getReferenceLabs()
    {
        return $this->referenceLabs;
    }

    /**
     * Sets a new referenceLabs
     *
     * @param string $referenceLabs
     * @return self
     */
    public function setReferenceLabs($referenceLabs)
    {
        $this->referenceLabs = $referenceLabs;
        return $this;
    }

    /**
     * Gets as alertLabs
     *
     * @return string
     */
    public function getAlertLabs()
    {
        return $this->alertLabs;
    }

    /**
     * Sets a new alertLabs
     *
     * @param string $alertLabs
     * @return self
     */
    public function setAlertLabs($alertLabs)
    {
        $this->alertLabs = $alertLabs;
        return $this;
    }

    /**
     * Adds as labVariableMapping
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping $labVariableMapping
     */
    public function addToLabVariableMapping(\Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping $labVariableMapping)
    {
        $this->labVariableMapping[] = $labVariableMapping;
        return $this;
    }

    /**
     * isset labVariableMapping
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLabVariableMapping($index)
    {
        return isset($this->labVariableMapping[$index]);
    }

    /**
     * unset labVariableMapping
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLabVariableMapping($index)
    {
        unset($this->labVariableMapping[$index]);
    }

    /**
     * Gets as labVariableMapping
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping[]
     */
    public function getLabVariableMapping()
    {
        return $this->labVariableMapping;
    }

    /**
     * Sets a new labVariableMapping
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\LabVariableMapping[]
     * $labVariableMapping
     * @return self
     */
    public function setLabVariableMapping(array $labVariableMapping)
    {
        $this->labVariableMapping = $labVariableMapping;
        return $this;
    }


}

