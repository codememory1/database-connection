<?php

namespace Codememory\Components\Database\Connection\Drivers;

use Codememory\Components\Database\Connection\Interfaces\DriverInterface;

/**
 * Class MysqlDriver
 *
 * @package Codememory\Components\Database\Connection\Drivers
 *
 * @author  Codememory
 */
final class MysqlDriver extends AbstractDriver
{

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

        return 'mysql';

    }

    /**
     * @inheritDoc
     */
    protected function DSNCollector(): string
    {

        $parameters = [
            'host'    => $this->getConnectorData()->getHost(),
            'port'    => $this->getConnectorData()->getPort(),
            'dbname'  => $this->getConnectorData()->getDbname(),
            'charset' => $this->getConnectorData()->getCharset()
        ];
        $dsn = [];

        foreach ($parameters as $name => $value) {
            if(null === $value) {
                continue;
            }

            $dsn[] = sprintf('%s=%s', $name, $value);
        }

        return implode(';', $dsn);

    }

}