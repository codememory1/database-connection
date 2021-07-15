<?php

namespace Codememory\Components\Database\Connection\Drivers;

use Codememory\Components\Database\Connection\Interfaces\ConnectorDataInterface;
use Codememory\Components\Database\Connection\Interfaces\DriverInterface;

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
    private array $options = [];

    /**
     * @var ConnectorDataInterface|null
     */
    private ?ConnectorDataInterface $connectorData = null;

    /**
     * @inheritDoc
     */
    public function setOptions(array $options): DriverInterface
    {

        $this->options = array_merge($this->options, $options);

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
     * @return $this
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
     * @return string
     */
    abstract protected function DSNCollector(): string;

}