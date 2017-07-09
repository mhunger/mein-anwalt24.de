<?php
/**
 * Created by PhpStorm.
 * User: michaelhunger
 * Date: 19/06/17
 * Time: 20:17
 */

namespace legaltech\config;


use legaltech\legalcase\LegalCase;
use taurus\framework\api\ApiBuilder;
use taurus\framework\routing\AbstractRouteConfig;

class LegaltechRouteConfig extends AbstractRouteConfig
{
    const API_BASE_PATH = 'api';

    public function __construct($base = '', ApiBuilder $apiBuilder)
    {
        parent::__construct($base, $apiBuilder);

        $this->addDefaultRoute(
            $this->apiBuilder->cget(LegalCase::class)
        );
    }
}