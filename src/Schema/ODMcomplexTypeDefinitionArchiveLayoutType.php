<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionArchiveLayoutType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ArchiveLayout
 */
class ODMcomplexTypeDefinitionArchiveLayoutType
{

    /**
     * @property string $oID
     */
    private $oID = null;

    /**
     * @property string $pdfFileName
     */
    private $pdfFileName = null;

    /**
     * @property string $presentationOID
     */
    private $presentationOID = null;

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
     * Gets as pdfFileName
     *
     * @return string
     */
    public function getPdfFileName()
    {
        return $this->pdfFileName;
    }

    /**
     * Sets a new pdfFileName
     *
     * @param string $pdfFileName
     * @return self
     */
    public function setPdfFileName($pdfFileName)
    {
        $this->pdfFileName = $pdfFileName;
        return $this;
    }

    /**
     * Gets as presentationOID
     *
     * @return string
     */
    public function getPresentationOID()
    {
        return $this->presentationOID;
    }

    /**
     * Sets a new presentationOID
     *
     * @param string $presentationOID
     * @return self
     */
    public function setPresentationOID($presentationOID)
    {
        $this->presentationOID = $presentationOID;
        return $this;
    }


}

