<?php

declare(strict_types = 1);

namespace Pyz\Client\PersonalizedProduct;

interface PersonalizedProductClientInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function getPersonalizedProducts(int $limit);
}
