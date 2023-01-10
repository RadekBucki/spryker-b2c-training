<?php

declare(strict_types = 1);

namespace Pyz\Zed\Training\Communication\Plugin\Command;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\StateMachine\Dependency\Plugin\CommandPluginInterface;

/**
 * @method \Pyz\Zed\Training\Communication\TrainingCommunicationFactory getFactory()
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class TrainingCommandPlugin  extends AbstractPlugin implements CommandPluginInterface
{
}
