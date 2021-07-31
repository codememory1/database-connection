<?php

namespace Codememory\Components\Database\Connection;

use Codememory\Components\Database\Connection\Exceptions\ConnectorNotExistException;
use Codememory\Components\Database\Connection\Exceptions\ConnectorWithNameExistException;
use Codememory\Components\Database\Connection\Interfaces\ConnectionInterface;
use Codememory\Components\Database\Connection\Interfaces\ConnectorInterface;

/**
 * Class Connection
 *
 * @package Codememory\Components\Database\Connection
 *
 * @author  Codememory
 */
class Connection implements ConnectionInterface
{

    /**
     * @var array
     */
    private array $connectors = [];

    /**
     * @inheritDoc
     * @throws ConnectorWithNameExistException
     */
    public function addConnector(string $connectorName, callable $callback): ConnectionInterface
    {

        if ($this->connectorExist($connectorName)) {
            throw new ConnectorWithNameExistException($connectorName);
        }

        $connectorConfiguration = new ConnectorConfiguration();

        call_user_func($callback, $connectorConfiguration);

        $this->connectors[$connectorName] = new Connector($connectorName, $connectorConfiguration);

        return $this;

    }

    /**
     * @inheritDoc
     * @throws ConnectorNotExistException
     */
    public function reconnect(string $connectorName, callable $callback, ?string $newConnectorName = null): ConnectorInterface|ConnectionInterface
    {

        if (!$this->connectorExist($connectorName)) {
            throw new ConnectorNotExistException($connectorName);
        }

        $connector = $this->getConnector($connectorName);
        $connectorData = clone $connector->getConnectorData();

        call_user_func($callback, $connectorData);

        $connector = new Connector($connectorName, $connectorData);

        if (null !== $newConnectorName && !array_key_exists($newConnectorName, $this->connectors)) {
            $this->connectors[$newConnectorName] = $connector;

            return $this;
        }

        return $connector;

    }

    /**
     * @inheritDoc
     */
    public function connectorExist(string $connectorName): bool
    {

        return array_key_exists($connectorName, $this->connectors);

    }

    /**
     * @inheritDoc
     */
    public function getConnectors(): array
    {

        return $this->connectors;

    }

    /**
     * @inheritDoc
     * @throws ConnectorNotExistException
     */
    public function getConnector(string $connectorName): ConnectorInterface
    {

        if (!$this->connectorExist($connectorName)) {
            throw new ConnectorNotExistException($connectorName);
        }

        return $this->getConnectors()[$connectorName];

    }

}