<?php

declare(strict_types=1);

namespace Pyz\Zed\HelloSpryker\Business\Writer;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerWriterInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
