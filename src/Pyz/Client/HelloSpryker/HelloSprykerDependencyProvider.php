<?php

declare(strict_types=1);

namespace Pyz\Client\HelloSpryker;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class HelloSprykerDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     * @throws \Spryker\Service\Container\Exception\FrozenServiceException
     */
    public function provideServiceLayerDependencies(Container $container): Container
    {
        return $this->addZedRequestClient($container);
    }

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     * @throws \Spryker\Service\Container\Exception\FrozenServiceException
     */
    protected function addZedRequestClient(Container $container): Container
    {
        $container->set(static::CLIENT_ZED_REQUEST, function (Container $container) {
            return $container->getLocator()->zedRequest()->client();
        });
        return $container;
    }
}
