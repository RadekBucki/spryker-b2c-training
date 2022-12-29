<?php

declare(strict_types=1);

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\HelloSpryker\Communication\HelloSprykerCommunicationFactory getFactory()
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface getFacade()
 */
class IndexController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    public function indexAction(Request $request): array
    {
        $originalString = "Hello Spryker!";
        $reversedString = $this->getFacade()->reverseString($originalString);
        return ['string' => $reversedString];
    }
}
