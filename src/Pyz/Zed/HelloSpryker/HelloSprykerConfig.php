<?php

declare(strict_types=1);

namespace Pyz\Zed\HelloSpryker;

use Pyz\Shared\HelloSpryker\HelloSprykerConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class HelloSprykerConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getExampleQueueChunkSize(): int
    {
        return $this->get(HelloSprykerConstants::EXAMPLE_QUEUE_CHUNK_SIZE, 500);
    }

    /**
     * @return string
     */
    public function getNew(): string
    {
        return $this->get('new');
    }
}
