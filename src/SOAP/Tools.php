<?php

namespace Kily\DM\SOAP;

class Tools
{
    public static function formatXml($str)
    {
        try {
            $dom = new \DOMDocument();
            $dom->preserveWhiteSpace = false;
            $dom->loadXML($str);
            $dom->formatOutput = true;

            return $dom->saveXml();
        } catch (\DOMException $e) {
        }

        return $str;
    }
}
