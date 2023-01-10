<?php

declare(strict_types = 1);

namespace Pyz\Zed\StringReverser\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\StringReverser\Business\StringReverserBusinessFactory getFactory()
 */
class StringReverserFacade extends AbstractFacade implements StringReverserFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($stringReverserTransfer);
    }
}
