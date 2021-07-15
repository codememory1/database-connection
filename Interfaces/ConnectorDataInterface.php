<?php

namespace Codememory\Components\Database\Connection\Interfaces;

/**
 * Interface ConnectorDataInterface
 *
 * @package Codememory\Components\Database\Connection\Interfaces
 *
 * @author  Codememory
 */
interface ConnectorDataInterface
{

    /**
     * @return string
     */
    public function getHost(): string;

    /**
     * @return int|null
     */
    public function getPort(): ?int;

    /**
     * @return string|null
     */
    public function getDbname(): ?string;

    /**
     * @return string|null
     */
    public function getUsername(): ?string;

    /**
     * @return string|null
     */
    public function getPassword(): ?string;

    /**
     * @return string
     */
    public function getCharset(): string;

    /**
     * @return DriverInterface|null
     */
    public function getDriver(): ?DriverInterface;

}