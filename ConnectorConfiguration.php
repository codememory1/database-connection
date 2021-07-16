<?php

namespace Codememory\Components\Database\Connection;

use Codememory\Components\Database\Connection\Interfaces\ConnectorDataInterface;
use Codememory\Components\Database\Connection\Interfaces\ConnectorConfigurationInterface;
use Codememory\Components\Database\Connection\Interfaces\DriverInterface;

/**
 * Class ConnectorConfiguration
 *
 * @package Codememory\Components\Database\Connection
 *
 * @author  Codememory
 */
final class ConnectorConfiguration implements ConnectorConfigurationInterface, ConnectorDataInterface
{

    /**
     * @var string
     */
    private string $host = 'localhost';

    /**
     * @var int|null
     */
    private ?int $port = null;

    /**
     * @var string|null
     */
    private ?string $dbname = null;

    /**
     * @var string|null
     */
    private ?string $username = null;

    /**
     * @var string|null
     */
    private ?string $password = null;

    /**
     * @var string
     */
    private string $charset = 'utf8';

    /**
     * @var DriverInterface|null
     */
    private ?DriverInterface $driver = null;

    /**
     * @inheritDoc
     */
    public function host(string $host): ConnectorConfigurationInterface
    {

        $this->host = $host;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function port(int $port): ConnectorConfigurationInterface
    {

        $this->port = $port;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function dbname(string $dbname): ConnectorConfigurationInterface
    {

        $this->dbname = $dbname;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function username(string $username): ConnectorConfigurationInterface
    {

        $this->username = $username;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function password(string $password): ConnectorConfigurationInterface
    {

        $this->password = $password;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function charset(string $charset): ConnectorConfigurationInterface
    {

        $this->charset = $charset;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function driver(DriverInterface $driver): ConnectorConfigurationInterface
    {

        $this->driver = $driver;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getHost(): string
    {

        return $this->host;

    }

    /**
     * @inheritDoc
     */
    public function getPort(): ?int
    {

        return $this->port;

    }

    /**
     * @inheritDoc
     */
    public function getDbname(): ?string
    {

        return $this->dbname;

    }

    /**
     * @inheritDoc
     */
    public function getUsername(): ?string
    {

        return $this->username;

    }

    /**
     * @inheritDoc
     */
    public function getPassword(): ?string
    {

        return $this->password;

    }

    /**
     * @inheritDoc
     */
    public function getCharset(): string
    {

        return $this->charset;

    }

    /**
     * @inheritDoc
     */
    public function getDriver(): ?DriverInterface
    {

        return $this->driver;

    }

}