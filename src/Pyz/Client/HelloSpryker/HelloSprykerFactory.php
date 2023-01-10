<?php

declare(strict_types=1);

namespace Pyz\Client\HelloSpryker;

use Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStub;
use Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStubInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloSprykerFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Client\HelloSpryker\Zed\HelloSprykerZedStubInterface
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function createHelloSprykerZedStub(): HelloSprykerZedStubInterface
    {
        return new HelloSprykerZedStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    protected function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
