<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerRepositoryInterface
{
    /**
     * @param int $idHelloSpryker
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer|null
     */
    public function findPyzHelloSprykerById(int $idHelloSpryker): ?HelloSprykerTransfer;
}
