<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Persistence;

use Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\HelloSpryker\HelloSprykerConfig getConfig()
 */
class HelloSprykerPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery
     */
    public function createHelloSprykerQuery(): PyzHelloSprykerQuery
    {
        return PyzHelloSprykerQuery::create();
    }
}
