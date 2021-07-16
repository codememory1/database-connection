<?php

namespace Codememory\Components\Database\Connection\Exceptions;

use Codememory\Components\Database\Connection\ErrorCodes;
use JetBrains\PhpStorm\Pure;

/**
 * Class NoDatabaseConnectionException
 *
 * @package Codememory\Components\Database\Connection\Exceptions
 *
 * @author  Codememory
 */
class NoDatabaseConnectionException extends DatabaseConnectionException
{

    /**
     * NoDatabaseConnectionException constructor.
     *
     * @param string $connectorName
     */
    #[Pure]
    public function __construct(string $connectorName)
    {

        parent::__construct(sprintf(
            'There is no database connection. Verify that the input of the connector named %s is correct',
            $connectorName
        ), ErrorCodes::NO_CONNECTION);

    }

}