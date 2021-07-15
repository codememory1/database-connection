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
     * @return string
     */
    public function getDSN(): string;

    /**
     * @return string
     */
    public function getDriverName(): string;

    /**
     * @param array $options
     *
     * @return DriverInterface
     */
    public function setOptions(array $options): DriverInterface;

    /**
     * @return array
     */
    public function getOptions(): array;

}