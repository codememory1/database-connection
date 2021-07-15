<?php

namespace Codememory\Components\Database\Connection\Exceptions;

use ErrorException;
use JetBrains\PhpStorm\Pure;

/**
 * Class DatabaseConnectionException
 *
 * @package Codememory\Components\Database\Connection\Exceptions
 *
 * @author  Codememory
 */
abstract class DatabaseConnectionException extends ErrorException
{

    /**
     * DatabaseConnectionException constructor.
     *
     * @param string $message
     * @param int    $code
     */
    #[Pure]
    public function __construct(string $message, int $code)
    {

        $this->code = $code;

        parent::__construct(sprintf('[%s] %s', $this->code, $message));

    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {

        return $this->code;

    }

}