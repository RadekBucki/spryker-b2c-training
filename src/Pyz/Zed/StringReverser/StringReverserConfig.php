<?php

declare(strict_types = 1);

namespace Pyz\Zed\StringReverser;

use Spryker\Zed\Kernel\AbstractBundleConfig;
use Pyz\Shared\StringReverser\StringReverserConstants;

class StringReverserConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getExampleQueueChunkSize(): int
    {
        return $this->get(StringReverserConstants::EXAMPLE_QUEUE_CHUNK_SIZE, 500);
    }
}
