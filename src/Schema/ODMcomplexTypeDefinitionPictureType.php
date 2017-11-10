<?php

namespace Medidata\RwsPhp\Schema\ODM;

/**
 * Class representing ODMcomplexTypeDefinitionPictureType
 *
 *
 * XSD Type: ODMcomplexTypeDefinition-Picture
 */
class ODMcomplexTypeDefinitionPictureType
{

    /**
     * @property string $pictureFileName
     */
    private $pictureFileName = null;

    /**
     * @property string $imageType
     */
    private $imageType = null;

    /**
     * Gets as pictureFileName
     *
     * @return string
     */
    public function getPictureFileName()
    {
        return $this->pictureFileName;
    }

    /**
     * Sets a new pictureFileName
     *
     * @param string $pictureFileName
     * @return self
     */
    public function setPictureFileName($pictureFileName)
    {
        $this->pictureFileName = $pictureFileName;
        return $this;
    }

    /**
     * Gets as imageType
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * Sets a new imageType
     *
     * @param string $imageType
     * @return self
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
        return $this;
    }


}

