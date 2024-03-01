<?php

/**
 * Class ilNotificationsImporter
 */
class ilNotificationsImporter extends ilXmlImporter
{
    /**
     * Import xml representation
     * @param string        entity
     * @param string        target release
     * @param string        id
     * @return    string        xml string
     */
    public function importXmlRepresentation(
        /* string */ $a_entity,
        /* string */ $a_id,
        /* string */ $a_xml,
        /* ilImportMapping */ $a_mapping
    ) /* : void */ {
      return false;
    }
}