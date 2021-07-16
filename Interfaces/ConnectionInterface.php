<?php

namespace Codememory\Components\Database\Connection\Interfaces;

/**
 * Interface ConnectionInterface
 *
 * @package Codememory\Components\Database\Connection\Interfaces
 *
 * @author  Codememory
 */
interface ConnectionInterface
{

    /**
     * @param string   $connectorName
     * @param callable $callback
     *
     * @return ConnectionInterface
     */
    public function addConnector(string $connectorName, callable $callback): ConnectionInterface;

    /**
     * @param string   $connectorName
     * @param callable $callback
     *
     * @return ConnectorInterface
     */
    public function reconnect(string $connectorName, callable $callback): ConnectorInterface;

    /**
     * @param string $connectorName
     *
     * @return bool
     */
    public function connectorExist(string $connectorName): bool;

    /**
     * @return array
     */
    public function getConnectors(): array;

    /**
     * @param string $connectorName
     *
     * @return ConnectorInterface
     */
    public function getConnector(string $connectorName): ConnectorInterface;

}