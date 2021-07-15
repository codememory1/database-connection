<?php

namespace Codememory\Components\Database\Connection\Exceptions;

use Codememory\Components\Database\Connection\ErrorCodes;
use JetBrains\PhpStorm\Pure;

/**
 * Class ConnectorNotExistException
 *
 * @package Codememory\Components\Database\Connection\Exceptions
 *
 * @author  Codememory
 */
class ConnectorNotExistException extends DatabaseConnectionException
{

    /**
     * ConnectorNotExistException constructor.
     *
     * @param string $name
     */
    #[Pure]
    public function __construct(string $name)
    {

        parent::__construct(sprintf('Connector named %s does not exist', $name), ErrorCodes::CONNECTOR_NOT_EXIST);

    }

}