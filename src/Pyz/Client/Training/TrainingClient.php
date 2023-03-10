<?php

declare(strict_types=1);

namespace Pyz\Client\Training;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\Training\TrainingFactory getFactory()
 */
class TrainingClient extends AbstractClient implements TrainingClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteria
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        return $this->getFactory()
            ->createTrainingStub()
            ->getAntelope($antelopeCriteria);
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->getFactory()
            ->createTrainingStub()
            ->createAntelope($antelopeTransfer);
    }
}
