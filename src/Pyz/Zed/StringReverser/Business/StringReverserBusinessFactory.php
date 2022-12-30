<?php

declare(strict_types = 1);

namespace Pyz\Zed\StringReverser\Business;

use Pyz\Zed\StringReverser\Business\Model\StringReverser;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\StringReverser\StringReverserConfig getConfig()
 */
class StringReverserBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\StringReverser\Business\Model\StringReverser
     */
    public function createStringReverser(): StringReverser
    {
        return new StringReverser();
    }
}
