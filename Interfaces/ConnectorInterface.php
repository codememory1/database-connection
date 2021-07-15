<?php

namespace Codememory\Components\Database\Connection\Interfaces;

use PDO;

/**
 * Interface ConnectorInterface
 *
 * @package Codememory\Components\Database\Connection\Interfaces
 *
 * @author  Codememory
 */
interface ConnectorInterface
{

    /**
     * @return bool
     */
    public function isConnection(): bool;

    /**
     * @return PDO
     */
    public function getConnection(): PDO;

    /**
     * @return ConnectorDataInterface
     */
    public function getConnectorData(): ConnectorDataInterface;

}