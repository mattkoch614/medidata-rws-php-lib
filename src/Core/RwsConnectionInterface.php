<?php namespace Medidata\RwsPhp\Core;

use Medidata\RwsPhp\Core\Requests\RwsRequest;

/**
 *  An interface for a connection to RAVE Web Services.
 *  @author Matthew Koch
 */
interface RwsConnectionInterface
{

    /**
     * Send an HTTP request.
     *
     * @param RwsRequest $request
     * @param null $timeout
     * @return mixed
     */
    public function sendRequest(RwsRequest $request, $timeout=null);

    /**
     * Return the result of the last request that was made.
     * @return mixed
     */
    public function getLastResult();

}