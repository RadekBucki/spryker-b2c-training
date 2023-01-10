<?php

declare(strict_types=1);

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeTransfer;

interface TrainingEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;
}
