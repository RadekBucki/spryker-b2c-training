<?php

declare(strict_types=1);

namespace Pyz\Client\PersonalizedProduct;

use Spryker\Client\Kernel\AbstractClient;

/**
 * @method PersonalizedProductFactory getFactory()
 */
class PersonalizedProductClient extends AbstractClient implements PersonalizedProductClientInterface
{
    /**
     * @param int $limit
     *
     * @return array
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getPersonalizedProducts(int $limit): array
    {
        $searchQuery = $this
            ->getFactory()
            ->createPersonalizedProductsQueryPlugin($limit);
        $searchQueryFormatters = $this
            ->getFactory()
            ->getSearchQueryFormatters();
        return $this->getFactory()
            ->getSearchClient()
            ->search(
                $searchQuery,
                $searchQueryFormatters
            );
    }
}
