<?php

declare(strict_types = 1);

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\HelloSpryker\HelloSprykerFactory getFactory()
 */
class HelloSprykerClient extends AbstractClient implements HelloSprykerClientInterface
{
    /**
     * {@inheritDoc}
     *
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     *
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createHelloSprykerZedStub()
            ->reverseString($helloSprykerTransfer);
    }
}
