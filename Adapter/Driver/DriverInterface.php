<?php

namespace Zend\Db\Adapter\Driver;

interface DriverInterface
{
    const PARAMETERIZATION_POSITIONAL = 'positional';
    const PARAMETERIZATION_NAMED = 'named';
    const NAME_FORMAT_CAMELCASE = 'camelCase';
    const NAME_FORMAT_NATURAL = 'natural';

    /**
     * @param string $nameFormat
     * @return string
     */
    public function getDatabasePlatformName($nameFormat = self::NAME_FORMAT_CAMELCASE);

    /**
     * @return bool
     */
    public function checkEnvironment();

    /**
     * @return ConnectionInterface
     */
    public function getConnection();

    /**
     * @return StatementInterface
     */
    public function createStatement($sqlOrResource = null);

    /**
     * @return ResultInterface
     */
    public function createResult($resource);

    /**
     * @return array
     */
    public function getPrepareType();

    /**
     * @param $name
     * @return string
     */
    public function formatParameterName($name, $type = null);

}
