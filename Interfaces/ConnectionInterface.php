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
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Create a new connector that can be accessed by name
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string   $connectorName
     * @param callable $callback
     *
     * @return ConnectionInterface
     */
    public function addConnector(string $connectorName, callable $callback): ConnectionInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the connector as a data basis, takes the connector by name,
     * using a callback, you can change certain connection data
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string      $connectorName
     * @param callable    $callback
     * @param string|null $newConnectorName
     *
     * @return ConnectorInterface|ConnectionInterface
     */
    public function reconnect(string $connectorName, callable $callback, ?string $newConnectorName = null): ConnectorInterface|ConnectionInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Check for existence of a connector by name
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $connectorName
     *
     * @return bool
     */
    public function connectorExist(string $connectorName): bool;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns an array of all created connectors, excluding reconnect
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return array
     */
    public function getConnectors(): array;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Get a connector by name
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $connectorName
     *
     * @return ConnectorInterface
     */
    public function getConnector(string $connectorName): ConnectorInterface;

}