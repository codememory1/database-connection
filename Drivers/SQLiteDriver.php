<?php

namespace Codememory\Components\Database\Connection\Drivers;

/**
 * Class SQLiteDriver
 *
 * @package Codememory\Components\Database\Connection\Drivers
 *
 * @author  Codememory
 */
final class SQLiteDriver extends AbstractDriver
{

    /**
     * @inheritDoc
     */
    protected function DSNCollector(): string
    {

        return $this->getConnectorData()->getDbname() ?: '';

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

        return 'sqlite';

    }

}