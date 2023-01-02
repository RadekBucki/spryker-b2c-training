<?php

declare(strict_types = 1);

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\Training\Persistence\TrainingPersistenceFactory getFactory()
 */
class TrainingRepository extends AbstractRepository implements TrainingRepositoryInterface
{
    /**
     * @inheritDoc
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteria): ?AntelopeTransfer
    {
        $antelopeQuery = $this->getFactory()
            ->createAntelopeQuery();

        if ($antelopeCriteria->getIdAntelope() !== null) {
            $antelopeQuery = $antelopeQuery->filterByIdAntelope($antelopeCriteria->getIdAntelope());
        } elseif ($antelopeCriteria->getName() !== null) {
            $antelopeQuery = $antelopeQuery->filterByName($antelopeCriteria->getName());
        } else {
            return null;
        }

        $antelopeEntity = $antelopeQuery->findOne();

        if (!$antelopeEntity) {
            return null;
        }

        $antelopeTransfer = new AntelopeTransfer();
        return $antelopeTransfer->fromArray($antelopeEntity->toArray(), true);
    }
}
