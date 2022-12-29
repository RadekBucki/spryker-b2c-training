<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\HelloSpryker\Communication\HelloSprykerCommunicationFactory getFactory()
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     */
    public function customAction(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFacade()
                ->customAction($helloSprykerTransfer);
    }
}
