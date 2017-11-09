<?php namespace Medidata\RwsPhp\Tests\Feature\Fakes;

use Medidata\RwsPhp\Core\Requests\RwsGetRequest;

class FakeRwsGetRequest extends RwsGetRequest
{

    /**
     * FakeRwsGetRequest constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The URL path of the request being made.
     * @return mixed
     */
    public function UrlPath()
    {
        return '/fakeURL';
    }
}