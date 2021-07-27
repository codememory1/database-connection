<?php

namespace Codememory\Components\Database\Connection;

use Codememory\Components\Database\Connection\Exceptions\DriverNotSupportedException;
use Codememory\Components\Database\Connection\Exceptions\NoDatabaseConnectionException;
use Codememory\Components\Database\Connection\Interfaces\ConnectorDataInterface;
use Codememory\Components\Database\Connection\Interfaces\ConnectorInterface;
use Exception;
use PDO;

/**
 * Class Connector
 *
 * @package Codememory\Components\Database\Connection
 *
 * @author  Codememory
 */
class Connector implements ConnectorInterface
{

    /**
     * @var string
     */
    private string $connectorName;

    /**
     * @var ConnectorDataInterface
     */
    private ConnectorDataInterface $connectorData;

    /**
     * @var null|PDO
     */
    private ?PDO $connection = null;

    /**
     * @var bool
     */
    private bool $isConnection = false;

    /**
     * Connector constructor.
     *
     * @param string                 $connectorName
     * @param ConnectorDataInterface $connectorData
     */
    public function __construct(string $connectorName, ConnectorDataInterface $connectorData)
    {

        $this->connectorName = $connectorName;
        $this->connectorData = $connectorData;

        $this->connectorData->getDriver()->setConnectorData($this->connectorData);
        $this->makingConnection();

    }

    /**
     * @inheritDoc
     */
    public function isConnection(): bool
    {

        return $this->isConnection;

    }

    /**
     * @inheritDoc
     * @return PDO
     * @throws DriverNotSupportedException
     * @throws NoDatabaseConnectionException
     */
    public function getConnection(): PDO
    {

        if (!$this->isDriverSupport()) {
            throw new DriverNotSupportedException($this->getConnectorData()->getDriver()->getDriverName());
        }

        if ($this->isConnection()) {
            return $this->connection;
        }

        throw new NoDatabaseConnectionException($this->connectorName);

    }

    /**
     * @inheritDoc
     */
    public function getConnectorData(): ConnectorDataInterface
    {

        return $this->connectorData;

    }

    /**
     * @return string
     */
    public function getConnectorName(): string
    {

        return $this->connectorName;

    }

    /**
     * @return bool
     */
    private function isDriverSupport(): bool
    {

        $drivers = PDO::getAvailableDrivers();

        return in_array($this->getConnectorData()->getDriver()->getDriverName(), $drivers);

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Creates a connection to the database and saves the connection status
     * and PDO object if the connection is successful
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return void
     */
    private function makingConnection(): void
    {

        try {
            $connectorData = $this->getConnectorData();

            $this->connection = new PDO(
                $connectorData->getDriver()->getDSN(),
                $connectorData->getUsername(),
                $connectorData->getPassword(),
                $connectorData->getDriver()->getOptions()
            );
            $this->isConnection = true;

        } catch (Exception) {
            $this->isConnection = false;
        }

    }

}