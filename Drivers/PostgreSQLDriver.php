<?php

namespace Codememory\Components\Database\Connection\Drivers;

/**
 * Class PostgreSQLDriver
 *
 * @package Codememory\Components\Database\Connection\Drivers
 *
 * @author  Codememory
 */
final class PostgreSQLDriver extends AbstractDriver
{

    /**
     * @inheritDoc
     */
    protected function DSNCollector(): string
    {

        $parameters = [
            'host'     => $this->getConnectorData()->getHost(),
            'port'     => $this->getConnectorData()->getPort(),
            'dbname'   => $this->getConnectorData()->getDbname(),
            'user'     => $this->getConnectorData()->getUsername(),
            'password' => $this->getConnectorData()->getPassword(),
        ];
        $dsn = [];

        foreach ($parameters as $name => $value) {
            $dsn[] = sprintf('%s=%s', $name, $value);
        }

        return implode(';', $dsn);

    }

    /**
     * @inheritDoc
     */
    public function getDSN(): string
    {

        return sprintf('%s:%s', $this->getDriverName(), $this->DSNCollector());

    }

    /**
     * @inheritDoc
     */
    public function getDriverName(): string
    {

        return 'pgsql';

    }

}