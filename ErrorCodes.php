<?php

namespace Codememory\Components\Database\Connection;

/**
 * Class ErrorCodes
 *
 * @package Codememory\Components\Database\Connection
 *
 * @author  Codememory
 */
abstract class ErrorCodes
{

    public const CONNECTOR_EXIST = 1;
    public const CONNECTOR_NOT_EXIST = 2;
    public const NO_CONNECTION = 3;
    public const DRIVER_NOT_SUPPORTED = 4;

}