<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Communication\Plugin\Command;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\StateMachine\Dependency\Plugin\CommandPluginInterface;

/**
 * @method \Pyz\Zed\HelloSpryker\Communication\HelloSprykerCommunicationFactory getFactory()
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface getFacade()
 */
class HelloSprykerCommandPlugin  extends AbstractPlugin implements CommandPluginInterface
{
}
