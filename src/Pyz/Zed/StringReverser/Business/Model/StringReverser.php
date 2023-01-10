<?php

namespace Pyz\Zed\StringReverser\Business\Model;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

class StringReverser implements StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer
    {
        return $stringReverserTransfer->setReversedString(
            strrev($stringReverserTransfer->getOriginalString())
        );
    }
}
