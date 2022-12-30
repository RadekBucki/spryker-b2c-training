<?php

namespace Pyz\Zed\StringReverser\Business\Model;

use Generated\Shared\Transfer\StringReverserTransfer;

interface StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer;
}
