<?php

declare(strict_types=1);

namespace Pyz\Zed\Training\Business;

use Pyz\Zed\Training\Business\Reader\AntelopeReader;
use Pyz\Zed\Training\Business\Writer\AntelopeWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\Training\TrainingConfig getConfig()
 */
class TrainingBusinessFactory extends AbstractBusinessFactory
{
    public function createAntelopeWriter(): AntelopeWriter
    {
        return new AntelopeWriter(
            $this->getEntityManager()
        );
    }

    public function createAntelopeReader(): AntelopeReader
    {
        return new AntelopeReader(
            $this->getRepository()
        );
    }
}
