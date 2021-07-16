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
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Connection host Default = localhost
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $host
     *
     * @return ConnectorConfigurationInterface
     */
    public function host(string $host): ConnectorConfigurationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Port of the host on which there should be a connection
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param int $port
     *
     * @return ConnectorConfigurationInterface
     */
    public function port(int $port): ConnectorConfigurationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * The name of the database that PDO will work with
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $dbname
     *
     * @return ConnectorConfigurationInterface
     */
    public function dbname(string $dbname): ConnectorConfigurationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * The name of the user to which you want to connect, depending
     * on the driver, this parameter can be omitted
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $username
     *
     * @return ConnectorConfigurationInterface
     */
    public function username(string $username): ConnectorConfigurationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * User password, depending on the driver, this parameter can be omitted
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $password
     *
     * @return ConnectorConfigurationInterface
     */
    public function password(string $password): ConnectorConfigurationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Database encoding. Default = utf8
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $charset
     *
     * @return ConnectorConfigurationInterface
     */
    public function charset(string $charset): ConnectorConfigurationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Driver object with which PDO will work
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param DriverInterface $driver
     *
     * @return ConnectorConfigurationInterface
     */
    public function driver(DriverInterface $driver): ConnectorConfigurationInterface;

}