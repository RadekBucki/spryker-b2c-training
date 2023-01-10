<?php

namespace Pyz\Client\Training\Stub;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class TrainingStub extends ZedRequestStub
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteria
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\AntelopeResponseTransfer $antelopeResponseTransfer */
        $antelopeResponseTransfer = $this->zedStub->call('/training/gateway/find-antelope', $antelopeCriteria);
        return $antelopeResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        /** @var \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer */
        $antelopeTransfer = $this->zedStub->call('/training/gateway/create-antelope', $antelopeTransfer);

        return $antelopeTransfer;
    }
}
