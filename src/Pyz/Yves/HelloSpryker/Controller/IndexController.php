<?php

declare(strict_types=1);

namespace Pyz\Yves\HelloSpryker\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\HelloSpryker\HelloSprykerFactory getFactory()
 * @method \Pyz\Client\HelloSpryker\HelloSprykerClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(Request $request): View
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();
        $helloSprykerTransfer->setOriginalString("Hello Spryker!");
        $helloSprykerTransfer = $this->getClient()->reverseString($helloSprykerTransfer);
        return $this->view(
            [
                'reversedString' => $helloSprykerTransfer->getReversedString()
            ],
            [],
            '@HelloSpryker/views/index/index.twig'
        );
    }
}
