<?php

declare(strict_types=1);

namespace Pyz\Client\PersonalizedProduct;

use Pyz\Client\PersonalizedProduct\Plugin\Elasticsearch\Query\PersonalizedProductQueryPlugin;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\Search\SearchClientInterface;

class PersonalizedProductFactory extends AbstractFactory
{
    /**
     * @param int $limit
     *
     * @return \Pyz\Client\PersonalizedProduct\Plugin\Elasticsearch\Query\PersonalizedProductQueryPlugin
     */
    public function createPersonalizedProductsQueryPlugin(int $limit): PersonalizedProductQueryPlugin
    {
        return new PersonalizedProductQueryPlugin($limit);
    }

    /**
     * @return array
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getSearchQueryFormatters(): array
    {
        return $this->getProvidedDependency(
            PersonalizedProductDependencyProvider::CATALOG_SEARCH_RESULT_FORMATTER_PLUGINS
        );
    }

    /**
     * @return \Spryker\Client\Search\SearchClientInterface
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getSearchClient(): SearchClientInterface
    {
        return $this->getProvidedDependency(PersonalizedProductDependencyProvider::CLIENT_SEARCH);
    }
}
