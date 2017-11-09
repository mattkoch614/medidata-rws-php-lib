<?php namespace Medidata\RwsPhp\Core\Requests;

class RequestHelpers
{

    /**
     * Create a url out of multiple parameters and a separator.
     * @param string $separator
     * @param array $uriSegments
     * @return string
     */
    public static function makeUrl($separator = '/', $uriSegments = [])
    {
        $result = implode($separator, $uriSegments);
        return $result;
    }

}