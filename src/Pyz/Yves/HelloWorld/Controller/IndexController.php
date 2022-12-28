<?php

declare(strict_types = 1);

namespace Pyz\Yves\HelloWorld\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\HelloWorld\HelloWorldFactory getFactory()
 */
class IndexController extends AbstractController
{
    /**
     * @param Request $request
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(Request $request): View
    {
        $data = [
            'hello' => 'Hello',
            'spryker' => 'Spryker',
            'exclamation' => '!'
        ];

        return $this->view(
            $data,
            [],
            '@HelloWorld/views/index/index.twig'
        );
    }
}
