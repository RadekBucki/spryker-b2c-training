<?php

declare(strict_types=1);

namespace Pyz\Zed\Training\Business\Reader;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

class AntelopeReader implements ReaderInterface
{
    private TrainingRepositoryInterface $trainingRepository;

    /**
     * @param \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface $trainingRepository
     */
    public function __construct(TrainingRepositoryInterface $trainingRepository)
    {
        $this->trainingRepository = $trainingRepository;
    }

    /**
     * @param \Pyz\Zed\Training\Business\Reader\AntelopeCriteriaTransfer $antelopeCriteria
     *
     * @return \Pyz\Zed\Training\Business\Reader\AntelopeResponseTransfer
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        $antelopeTransfer = $this->trainingRepository
            ->getAntelope($antelopeCriteria);
        $antelopeResponseTransfer = new AntelopeResponseTransfer();
        $antelopeResponseTransfer
            ->setIsSuccessful(false);
        if ($antelopeTransfer) {
            $antelopeResponseTransfer
                ->setAntelope($antelopeTransfer)
                ->setIsSuccessful(true);
        }
        return $antelopeResponseTransfer;
    }
}
