<?php

namespace Pyz\Zed\HelloSpryker\Business\Reverser;

use Generated\Shared\Transfer\HelloSprykerTransfer;

class StringReverser implements StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $helloSprykerTransfer->setReversedString(
            strrev($helloSprykerTransfer->getOriginalString())
        );
    }
}
