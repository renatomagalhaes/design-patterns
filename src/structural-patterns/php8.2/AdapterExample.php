<?php

// Target interface expected by the client
interface JsonReader {
    public function readJson(): string;
}

// Adaptee class with an incompatible interface
class XmlReader {
    public function readXml(): string {
        return "<data><item>XML data</item></data>";
    }
}

// Adapter class
class XmlToJsonAdapter implements JsonReader {
    private XmlReader $xmlReader;

    public function __construct(XmlReader $xmlReader) {
        $this->xmlReader = $xmlReader;
    }

    public function readJson(): string {
        $xmlData = $this->xmlReader->readXml();
        // Simulate XML to JSON conversion
        return json_encode(simplexml_load_string($xmlData));
    }
}

// Client code
function clientCode(JsonReader $reader): void {
    echo $reader->readJson();
}

// Usage example
$xmlReader = new XmlReader();
$adapter = new XmlToJsonAdapter($xmlReader);
clientCode($adapter);
