<?php

declare(strict_types = 1);

namespace Pyz\Zed\Training\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;

interface WriterInterface
{
    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;
}
