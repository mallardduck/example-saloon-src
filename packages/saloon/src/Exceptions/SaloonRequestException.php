<?php

namespace Sammyjo20\Saloon\Exceptions;

use Throwable;
use \Exception;
use Sammyjo20\Saloon\Http\SaloonResponse;

class SaloonRequestException extends Exception
{
    /**
     * The Saloon Response
     *
     * @var SaloonResponse
     */
    protected SaloonResponse $saloonResponse;

    public function __construct(SaloonResponse $response, $message = '', $code = 0, Throwable $previous = null)
    {
        $this->saloonResponse = $response;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the Saloon Response Class.
     *
     * @return SaloonResponse
     */
    public function getSaloonResponse(): SaloonResponse
    {
        return $this->saloonResponse;
    }
}
