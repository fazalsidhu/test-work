<?php

/**
 * Exercise 5
 */

class ParseXml
{

    public function createAssociativeArray($file)
    {
        $reader = new XMLReader();

        $doc = new DOMDocument;

        if (!$reader->open($file)) {
            die("Failed to open $file");
        }
        
        while ($reader->read()) {
            if ($reader->nodeType == XMLReader::ELEMENT && $reader->getAttribute('status') != '') {

                $node = simplexml_import_dom($doc->importNode($reader->expand(), true));

                $created_array[] = array(
                    (string) $node->uniqueID => $reader->name,
                );

            }

        }
        $reader->close();
        return $created_array;
    }
}
$instance = new ParseXml();
$file = "sample-reaxml.xml";

echo '<pre>' ,print_r($instance->createAssociativeArray($file)), '</pre>';
