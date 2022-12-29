<?php

declare(strict_types=1);

namespace Pyz\Yves\PersonalizedProduct\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;

/**
 * @method \Pyz\Yves\PersonalizedProduct\PersonalizedProductFactory getFactory()
 */
class IndexController extends AbstractController
{
    /**
     * @param int $limit
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(int $limit): View
    {
        return $this->view(
            $this->getClient()->getPersonalizedProducts($limit),
            [],
            '@PersonalizedProduct/views/index/index.twig'
        );
    }
}
