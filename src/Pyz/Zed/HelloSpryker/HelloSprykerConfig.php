<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker;

use Spryker\Zed\Kernel\AbstractBundleConfig;
use Pyz\Shared\HelloSpryker\HelloSprykerConstants;

class HelloSprykerConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getExampleQueueChunkSize(): int
    {
        return $this->get(HelloSprykerConstants::EXAMPLE_QUEUE_CHUNK_SIZE, 500);
    }
}
