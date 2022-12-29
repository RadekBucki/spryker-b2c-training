<?php

declare(strict_types = 1);

namespace Pyz\Yves\PersonalizedProduct;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;

class PersonalizedProductDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);

        return $container;
    }
}
