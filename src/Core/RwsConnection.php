<?php namespace Medidata\RwsPhp\Core;

/**
 *  This class provides methods to establish a connection to RWS and send requests.
 *  @author Matthew Koch
 */
class RwsConnection{

    protected $domain;

    protected $base_url;

    /**
     * RwsConnection constructor.
     * @param $domain
     * @param string $virtual_dir
     */
    function __construct($domain, $virtual_dir = 'RaveWebServices') {
        $this->domain = $domain;
        $this->base_url = "";

    }
}