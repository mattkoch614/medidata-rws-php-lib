<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionArchiveLayoutRefType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-ArchiveLayoutRef
 */
class ODMcomplexTypeDefinitionArchiveLayoutRefType
{

    /**
     * @property string $archiveLayoutOID
     */
    private $archiveLayoutOID = null;

    /**
     * Gets as archiveLayoutOID
     *
     * @return string
     */
    public function getArchiveLayoutOID()
    {
        return $this->archiveLayoutOID;
    }

    /**
     * Sets a new archiveLayoutOID
     *
     * @param string $archiveLayoutOID
     * @return self
     */
    public function setArchiveLayoutOID($archiveLayoutOID)
    {
        $this->archiveLayoutOID = $archiveLayoutOID;
        return $this;
    }


}

