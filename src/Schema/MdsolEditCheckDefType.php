<?php

namespace Medidata\RwsPhp\Schema\ODM\mdsol;

/**
 * Class representing MdsolEditCheckDefType
 *
 *
 * XSD Type: mdsol-EditCheckDef
 */
class MdsolEditCheckDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $active
     */
    private $active = null;

    /**
     * @property string $bypassDuringMigration
     */
    private $bypassDuringMigration = null;

    /**
     * @property string $needsRetesting
     */
    private $needsRetesting = null;

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CheckStep[] $checkStep
     */
    private $checkStep = array(
        
    );

    /**
     * @property \Medidata\RwsPhp\Schema\ODM\mdsol\CheckAction[] $checkAction
     */
    private $checkAction = array(
        
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
     * Gets as active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param string $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as bypassDuringMigration
     *
     * @return string
     */
    public function getBypassDuringMigration()
    {
        return $this->bypassDuringMigration;
    }

    /**
     * Sets a new bypassDuringMigration
     *
     * @param string $bypassDuringMigration
     * @return self
     */
    public function setBypassDuringMigration($bypassDuringMigration)
    {
        $this->bypassDuringMigration = $bypassDuringMigration;
        return $this;
    }

    /**
     * Gets as needsRetesting
     *
     * @return string
     */
    public function getNeedsRetesting()
    {
        return $this->needsRetesting;
    }

    /**
     * Sets a new needsRetesting
     *
     * @param string $needsRetesting
     * @return self
     */
    public function setNeedsRetesting($needsRetesting)
    {
        $this->needsRetesting = $needsRetesting;
        return $this;
    }

    /**
     * Adds as checkStep
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CheckStep $checkStep
     */
    public function addToCheckStep(\Medidata\RwsPhp\Schema\ODM\mdsol\CheckStep $checkStep)
    {
        $this->checkStep[] = $checkStep;
        return $this;
    }

    /**
     * isset checkStep
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCheckStep($index)
    {
        return isset($this->checkStep[$index]);
    }

    /**
     * unset checkStep
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCheckStep($index)
    {
        unset($this->checkStep[$index]);
    }

    /**
     * Gets as checkStep
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CheckStep[]
     */
    public function getCheckStep()
    {
        return $this->checkStep;
    }

    /**
     * Sets a new checkStep
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CheckStep[] $checkStep
     * @return self
     */
    public function setCheckStep(array $checkStep)
    {
        $this->checkStep = $checkStep;
        return $this;
    }

    /**
     * Adds as checkAction
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CheckAction $checkAction
     */
    public function addToCheckAction(\Medidata\RwsPhp\Schema\ODM\mdsol\CheckAction $checkAction)
    {
        $this->checkAction[] = $checkAction;
        return $this;
    }

    /**
     * isset checkAction
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCheckAction($index)
    {
        return isset($this->checkAction[$index]);
    }

    /**
     * unset checkAction
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCheckAction($index)
    {
        unset($this->checkAction[$index]);
    }

    /**
     * Gets as checkAction
     *
     * @return \Medidata\RwsPhp\Schema\ODM\mdsol\CheckAction[]
     */
    public function getCheckAction()
    {
        return $this->checkAction;
    }

    /**
     * Sets a new checkAction
     *
     * @param \Medidata\RwsPhp\Schema\ODM\mdsol\CheckAction[] $checkAction
     * @return self
     */
    public function setCheckAction(array $checkAction)
    {
        $this->checkAction = $checkAction;
        return $this;
    }


}

