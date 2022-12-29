<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Business\Reader;

interface HelloSprykerReaderInterface
{
    /**
    * @param \Generated\Shared\Transfer\HelloSprykerCriteriaTransfer $helloSprykerCriteriaTransfer
    *
    * @return \Generated\Shared\Transfer\HelloSprykerCollectionTransfer
    */
    public function findHelloSpryker(HelloSprykerCriteriaTransfer $helloSprykerCriteriaTransfer): HelloSprykerCollectionTransfer;
}
