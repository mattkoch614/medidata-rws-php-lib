<?php

namespace Medidata\RwsPhp\Core\Requests;


/**
 * Represents a GET request that requires authorization.
 *
 * @property bool requiresAuthentication
 */
abstract class RwsAuthorizedGetRequest extends RwsGetRequest
{
    /**
     * RwsGetRequest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->requiresAuthentication = true;
    }
}