<?php

/**
 * Class ilNotificationsExporter
 */
class ilNotificationsExporter extends ilXmlExporter
{

    /**
     * Get xml representation
     * @param string        entity
     * @param string        schema version
     * @param string        id
     * @return    string        xml string
     */
    public function getXmlRepresentation(/* string */ $a_entity, /* string */ $a_schema_version, /* string */ $a_id) /* : string */
    {
        return false;
    }

    public function init() : void
    {
        // TODO: Implement init() method.
    }

    /**
     * Returns schema versions that the component can export to.
     * ILIAS chooses the first one, that has min/max constraints which
     * fit to the target release. Please put the newest on top. Example:
     *        return array (
     *        "4.1.0" => array(
     *            "namespace" => "http://www.ilias.de/Services/MetaData/md/4_1",
     *            "xsd_file" => "ilias_md_4_1.xsd",
     *            "min" => "4.1.0",
     *            "max" => "")
     *        );
     * @param string $a_entity
     * @return string[][]
     */
    public function getValidSchemaVersions(/* string */ $a_entity) /* : array */
    {
        return array(
            "5.2.0" => array(
                "namespace" => "http://www.ilias.de/Plugins/Card/md/5_2",
                "xsd_file" => "ilias_md_5_2.xsd",
                "min" => "5.2.0",
                "max" => ""
            )
        );
    }
}