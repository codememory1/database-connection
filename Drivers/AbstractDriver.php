<?php

namespace Codememory\Components\Database\Connection\Drivers;

use Codememory\Components\Database\Connection\Interfaces\ConnectorDataInterface;
use Codememory\Components\Database\Connection\Interfaces\DriverInterface;
use PDO;

/**
 * Class AbstractDriver
 *
 * @package Codememory\Components\Database\Connection\Drivers
 *
 * @author  Codememory
 */
abstract class AbstractDriver implements DriverInterface
{

    /**
     * @var array
     */
    private array $options = [
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    /**
     * @var ConnectorDataInterface|null
     */
    private ?ConnectorDataInterface $connectorData = null;

    /**
     * @inheritDoc
     */
    public function setOptions(array $options): DriverInterface
    {

        $this->options = $this->options + $options;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {

        return $this->options;

    }

    /**
     * @param ConnectorDataInterface $connectorData
     *
     * @return AbstractDriver
     */
    public function setConnectorData(ConnectorDataInterface $connectorData): AbstractDriver
    {

        $this->connectorData = $connectorData;

        return $this;

    }

    /**
     * @return ConnectorDataInterface
     */
    protected function getConnectorData(): ConnectorDataInterface
    {

        return $this->connectorData;

    }

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * This method collects dsn and returns the finished dsn string
     * of the current driver
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return string
     */
    abstract protected function DSNCollector(): string;

}