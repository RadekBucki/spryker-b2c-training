<?php

declare(strict_types = 1);

namespace Pyz\Zed\Training;

use Spryker\Zed\Kernel\AbstractBundleConfig;
use Pyz\Shared\Training\TrainingConstants;

class TrainingConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getExampleQueueChunkSize(): int
    {
        return $this->get(TrainingConstants::EXAMPLE_QUEUE_CHUNK_SIZE, 500);
    }
}
