<?php

declare(strict_types=1);

namespace Pyz\Zed\Training\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;

class AntelopeWriter implements WriterInterface
{
    private TrainingEntityManagerInterface $trainingEntityManager;

    /**
     * @param \Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface $trainingEntityManager
     */
    public function __construct(TrainingEntityManagerInterface $trainingEntityManager)
    {
        $this->trainingEntityManager = $trainingEntityManager;
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->trainingEntityManager->createAntelope($antelopeTransfer);
    }
}
