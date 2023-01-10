<?php

declare(strict_types = 1);

namespace Pyz\Zed\StringReverser\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface StringReverserFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer;
}
