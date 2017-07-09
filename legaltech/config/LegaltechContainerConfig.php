<?php
/**
 * Created by PhpStorm.
 * User: michaelhunger
 * Date: 19/06/17
 * Time: 20:16
 */

namespace legaltech\config;

use legaltech\config\LegaltechRouteConfig;
use taurus\framework\config\TaurusContainerConfig;
use taurus\framework\container\AbstractContainerConfig;
use taurus\framework\container\ServiceConfig;
use taurus\framework\db\mysql\MySqlQueryStringBuilderImpl;

class LegaltechContainerConfig extends AbstractContainerConfig
{
    const SERVICE_legaltech_ROUTE_CONFIG = LegaltechRouteConfig::class;

    protected function configure()
    {

        $this->serviceDefinitions[TaurusContainerConfig::SERVICE_MYSQL_CONNECTION] =
            new ServiceConfig(TaurusContainerConfig::SERVICE_MYSQL_CONNECTION,
                'MysqlConnection',
                ['localhost', 'legal', 'legal', 'legal', MySqlQueryStringBuilderImpl::class],
                true
            );

        $this->serviceDefinitions[TaurusContainerConfig::SERVICE_ROUTER] =
            new ServiceConfig(TaurusContainerConfig::SERVICE_ROUTER,
                'router',
                [
                    LegaltechRouteConfig::class,
                    null
                ]);

        $this->serviceDefinitions[self::SERVICE_legaltech_ROUTE_CONFIG] =
            new ServiceConfig(self::SERVICE_legaltech_ROUTE_CONFIG,
                null,
                [LegaltechRouteConfig::API_BASE_PATH],
                true
            );
    }
}