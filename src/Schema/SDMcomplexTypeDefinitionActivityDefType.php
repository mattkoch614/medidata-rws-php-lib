<?php

namespace Medidata\RwsPhp\Schema\StudyDesign;

/**
 * Class representing SDMcomplexTypeDefinitionActivityDefType
 *
 * An ActivityDef represents a point in a study at which a specific actions are to
 * be taken.
 * XSD Type: SDMcomplexTypeDefinition-ActivityDef
 */
class SDMcomplexTypeDefinitionActivityDefType
{

    /**
     * Unique identifier for the activity
     *
     * @property string $oID
     */
    private $oID = null;

    /**
     * Short name for the activity
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Activity description
     *
     * @property \Medidata\RwsPhp\Schema\ODM\Description $description
     */
    private $description = null;

    /**
     * List of references to odm:FormDefs which are to be collected. Indicates that the
     * activity is a data collection activity.
     *
     * @property \Medidata\RwsPhp\Schema\ODM\FormRef[] $formRef
     */
    private $formRef = array(
        
    );

    /**
     * Gets as oID
     *
     * Unique identifier for the activity
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
     * Unique identifier for the activity
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
     * Gets as name
     *
     * Short name for the activity
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Short name for the activity
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * Activity description
     *
     * @return \Medidata\RwsPhp\Schema\ODM\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Activity description
     *
     * @param \Medidata\RwsPhp\Schema\ODM\Description $description
     * @return self
     */
    public function setDescription(\Medidata\RwsPhp\Schema\ODM\Description $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as formRef
     *
     * List of references to odm:FormDefs which are to be collected. Indicates that the
     * activity is a data collection activity.
     *
     * @return self
     * @param \Medidata\RwsPhp\Schema\ODM\FormRef $formRef
     */
    public function addToFormRef(\Medidata\RwsPhp\Schema\ODM\FormRef $formRef)
    {
        $this->formRef[] = $formRef;
        return $this;
    }

    /**
     * isset formRef
     *
     * List of references to odm:FormDefs which are to be collected. Indicates that the
     * activity is a data collection activity.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormRef($index)
    {
        return isset($this->formRef[$index]);
    }

    /**
     * unset formRef
     *
     * List of references to odm:FormDefs which are to be collected. Indicates that the
     * activity is a data collection activity.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormRef($index)
    {
        unset($this->formRef[$index]);
    }

    /**
     * Gets as formRef
     *
     * List of references to odm:FormDefs which are to be collected. Indicates that the
     * activity is a data collection activity.
     *
     * @return \Medidata\RwsPhp\Schema\ODM\FormRef[]
     */
    public function getFormRef()
    {
        return $this->formRef;
    }

    /**
     * Sets a new formRef
     *
     * List of references to odm:FormDefs which are to be collected. Indicates that the
     * activity is a data collection activity.
     *
     * @param \Medidata\RwsPhp\Schema\ODM\FormRef[] $formRef
     * @return self
     */
    public function setFormRef(array $formRef)
    {
        $this->formRef = $formRef;
        return $this;
    }


}

