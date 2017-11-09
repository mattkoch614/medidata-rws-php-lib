<?php namespace Medidata\RwsPhp\Core\Exceptions;

use Medidata\RwsPhp\Core\Responses\RwsError;
use Throwable;

class RwsException extends \Exception
{
    protected $rwsError;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Static constructor to add a specific RWS Error object
     *
     * @param string $message
     * @param RwsError $error
     * @return static
     */
    public static function withRwsException($message = "", RwsError $error)
    {
        $exception = new self($message);
        $exception->rwsError = $error;
        return $exception;
    }

}