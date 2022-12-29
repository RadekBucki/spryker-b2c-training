<?php

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloSprykerZedStub implements HelloSprykerZedStubInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected ZedRequestClientInterface $zedRequestClient;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClientInterface $zedRequestClient
     */
    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @inheritDoc
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        /** @var \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer */
        $helloSprykerTransfer = $this->zedRequestClient->call(
            '/hello-spryker/gateway/reverse-string', $helloSprykerTransfer
        );
        return $helloSprykerTransfer;
    }
}
