<?php

namespace Codememory\Components\Database\Connection\Exceptions;

use Codememory\Components\Database\Connection\ErrorCodes;
use JetBrains\PhpStorm\Pure;

/**
 * Class ConnectorWithNameExistException
 *
 * @package Codememory\Components\Database\Connection\Exceptions
 *
 * @author  Codememory
 */
class ConnectorWithNameExistException extends DatabaseConnectionException
{

    /**
     * ConnectorWithNameExistException constructor.
     *
     * @param string $name
     */
    #[Pure]
    public function __construct(string $name)
    {

        parent::__construct(sprintf('A connector named %s already exists', $name), ErrorCodes::CONNECTOR_EXIST);

    }

}