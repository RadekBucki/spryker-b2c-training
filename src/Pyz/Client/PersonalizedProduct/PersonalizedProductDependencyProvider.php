<?php

declare(strict_types = 1);

namespace Pyz\Client\PersonalizedProduct;

use Spryker\Client\Catalog\Plugin\Elasticsearch\ResultFormatter\RawCatalogSearchResultFormatterPlugin;
use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class PersonalizedProductDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_SEARCH = 'CLIENT_SEARCH';
    public const CATALOG_SEARCH_RESULT_FORMATTER_PLUGINS = 'CATALOG_SEARCH_RESULT_FORMATTER_PLUGINS';

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     * @throws \Spryker\Service\Container\Exception\FrozenServiceException
     */
    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = $this->addSearchClient($container);
        $container = $this->addCatalogSearchResultFormatterPlugins($container);

        return $container;
    }

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     * @throws \Spryker\Service\Container\Exception\FrozenServiceException
     */
    protected function addSearchClient(Container $container): Container
    {
        $container->set(static::CLIENT_SEARCH, function (Container $container) {
            return $container->getLocator()->search()->client();
        });

        return $container;
    }

    public function addCatalogSearchResultFormatterPlugins($container)
    {
        $container->set(static::CATALOG_SEARCH_RESULT_FORMATTER_PLUGINS, function () {
            return [
                new RawCatalogSearchResultFormatterPlugin()
            ];
        });

        return $container;
    }
}
