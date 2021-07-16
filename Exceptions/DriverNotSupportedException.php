<?php

namespace Codememory\Components\Database\Connection\Exceptions;

use Codememory\Components\Database\Connection\ErrorCodes;
use JetBrains\PhpStorm\Pure;

/**
 * Class DriverNotSupportedException
 *
 * @package Codememory\Components\Database\Connection\Exceptions
 *
 * @author  Codememory
 */
class DriverNotSupportedException extends DatabaseConnectionException
{

    /**
     * DriverNotSupportedException constructor.
     *
     * @param string $driverName
     */
    #[Pure]
    public function __construct(string $driverName)
    {

        parent::__construct(sprintf(
            'The %s driver is not supported, please activate this driver in php.ini settings',
            $driverName
        ), ErrorCodes::DRIVER_NOT_SUPPORTED);

    }

}