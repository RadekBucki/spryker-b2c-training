<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Business;

interface HelloSprykerFacadeInterface
{
    /**
     * Specification:
     * - Reverses string.
     *
     * @api
     *
     * @param string $stringToReverse
     *
     * @return string
     */
    public function reverseString(string $stringToReverse): string;
}
