<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Business\Writer;

use Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface;

class HelloSprykerWriter implements HelloSprykerWriterInterface
{
    private HelloSprykerEntityManagerInterface $helloSprykerEntityManager;

    /**
     * @param \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface $helloSprykerEntityManager
     */
    public function __construct(HelloSprykerEntityManagerInterface $helloSprykerEntityManager)
    {
        $this->helloSprykerEntityManager = $helloSprykerEntityManager;
}
}