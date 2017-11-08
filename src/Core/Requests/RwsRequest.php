<?php

namespace Medidata\RwsPhp\Core\Requests;

abstract class RwsRequest
{
    public $verb;
    public $requiresAuthentication;
    public $uri;
}