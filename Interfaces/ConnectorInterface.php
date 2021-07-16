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
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Check the status of the database connection
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return bool
     */
    public function isConnection(): bool;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the PDO object if the connection is successful, otherwise it
     * throws certain exceptions, such as: driver not support exception
     * and connection data invalid exception
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return PDO
     */
    public function getConnection(): PDO;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns a data object for a database connection
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return ConnectorDataInterface
     */
    public function getConnectorData(): ConnectorDataInterface;

}