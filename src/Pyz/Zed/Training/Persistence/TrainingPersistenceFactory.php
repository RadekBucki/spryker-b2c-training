<?php

declare(strict_types = 1);

namespace Pyz\Zed\Training\Persistence;

use Orm\Zed\Training\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\Training\TrainingConfig getConfig()
 */
class TrainingPersistenceFactory extends AbstractPersistenceFactory
{
    public function createAntelopeQuery(): PyzAntelopeQuery
    {
        return PyzAntelopeQuery::create();
    }
}
