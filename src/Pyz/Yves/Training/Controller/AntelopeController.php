<?php

declare(strict_types=1);

namespace Pyz\Yves\Training\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;

/**
 * @method \Pyz\Yves\Training\TrainingFactory getFactory()
 */
class AntelopeController extends AbstractController
{
    /**
     * @param string $name
     *
     * @return \Spryker\Yves\Kernel\View\View
     * @throws \Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getAction(string $name): \Spryker\Yves\Kernel\View\View
    {
        $antelopeCriteriaTransfer = new AntelopeCriteriaTransfer();
        $antelopeCriteriaTransfer->setName($name);
        $antelopeResponseTransfer = $this->getFactory()
            ->getTrainingClient()
            ->getAntelope($antelopeCriteriaTransfer);
        return $this->view(
            ['antelope' => $antelopeResponseTransfer->getAntelope()],
            [],
            '@Training/views/antelope/get.twig'
        );
    }
}
