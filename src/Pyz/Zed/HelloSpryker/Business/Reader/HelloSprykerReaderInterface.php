<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Business\Reader;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
