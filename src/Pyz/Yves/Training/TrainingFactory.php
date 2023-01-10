<?php

declare(strict_types=1);

namespace Pyz\Yves\Training;

use Pyz\Client\Training\TrainingClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;

/**
 * @method \Pyz\Yves\Training\TrainingConfig getConfig()
 */
class TrainingFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Client\Training\TrainingClientInterface
     * @throws \Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getTrainingClient(): TrainingClientInterface
    {
        return $this->getProvidedDependency(TrainingDependencyProvider::CLIENT_TRAINING);
    }
}
