<?php

declare(strict_types = 1);

namespace Pyz\Yves\HelloSpryker\Widget;

use Spryker\Yves\Kernel\View\View;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\HelloSpryker\HelloSprykerConfig getConfig()
 */
class HelloSprykerWidget extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(Request $request): View
    {
        $data = ['reversedString' => 'Hello Spryker!'];

        return $this->view(
            $data,
            [],
            '@HelloSpryker/views/index/index.twig'
        );
    }
}
