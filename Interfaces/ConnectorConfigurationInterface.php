<?php

namespace Codememory\Components\Database\Connection\Interfaces;

/**
 * Interface ConnectorConfigurationInterface
 *
 * @package Codememory\Components\Database\Connection\Interfaces
 *
 * @author  Codememory
 */
interface ConnectorConfigurationInterface
{

    /**
     * @param string $host
     *
     * @return ConnectorConfigurationInterface
     */
    public function host(string $host): ConnectorConfigurationInterface;

    /**
     * @param int $port
     *
     * @return ConnectorConfigurationInterface
     */
    public function port(int $port): ConnectorConfigurationInterface;

    /**
     * @param string $dbname
     *
     * @return ConnectorConfigurationInterface
     */
    public function dbname(string $dbname): ConnectorConfigurationInterface;

    /**
     * @param string $username
     *
     * @return ConnectorConfigurationInterface
     */
    public function username(string $username): ConnectorConfigurationInterface;

    /**
     * @param string $password
     *
     * @return ConnectorConfigurationInterface
     */
    public function password(string $password): ConnectorConfigurationInterface;

    /**
     * @param string $charset
     *
     * @return ConnectorConfigurationInterface
     */
    public function charset(string $charset): ConnectorConfigurationInterface;

    /**
     * @param DriverInterface $driver
     *
     * @return ConnectorConfigurationInterface
     */
    public function driver(DriverInterface $driver): ConnectorConfigurationInterface;

}