<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionSignatureDefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-SignatureDef
 */
class ODMcomplexTypeDefinitionSignatureDefType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $methodology
     */
    private $methodology = null;

    /**
     * @property string $meaning
     */
    private $meaning = null;

    /**
     * @property string $legalReason
     */
    private $legalReason = null;

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
     * Gets as methodology
     *
     * @return string
     */
    public function getMethodology()
    {
        return $this->methodology;
    }

    /**
     * Sets a new methodology
     *
     * @param string $methodology
     * @return self
     */
    public function setMethodology($methodology)
    {
        $this->methodology = $methodology;
        return $this;
    }

    /**
     * Gets as meaning
     *
     * @return string
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * Sets a new meaning
     *
     * @param string $meaning
     * @return self
     */
    public function setMeaning($meaning)
    {
        $this->meaning = $meaning;
        return $this;
    }

    /**
     * Gets as legalReason
     *
     * @return string
     */
    public function getLegalReason()
    {
        return $this->legalReason;
    }

    /**
     * Sets a new legalReason
     *
     * @param string $legalReason
     * @return self
     */
    public function setLegalReason($legalReason)
    {
        $this->legalReason = $legalReason;
        return $this;
    }


}

