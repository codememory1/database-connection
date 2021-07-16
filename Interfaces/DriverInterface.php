<?php

namespace Codememory\Components\Database\Connection\Interfaces;

/**
 * Interface DriverInterface
 *
 * @package Codememory\Components\Database\Connection\Interfaces
 *
 * @author  Codememory
 */
interface DriverInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the correct dsn for connection
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return string
     */
    public function getDSN(): string;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the dsn prefix of the current driver
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return string
     */
    public function getDriverName(): string;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Set PDO connection options
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param array $options
     *
     * @return DriverInterface
     */
    public function setOptions(array $options): DriverInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns an array of all passed options for the connection
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return array
     */
    public function getOptions(): array;

}