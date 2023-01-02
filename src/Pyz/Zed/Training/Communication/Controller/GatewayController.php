<?php

declare(strict_types=1);

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Training\Communication\TrainingCommunicationFactory getFactory()
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteria
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function findAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        return $this->getFacade()
            ->getAntelope($antelopeCriteria);
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function createAntelopeAction(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->getFacade()
            ->createAntelope($antelopeTransfer);
    }
}
