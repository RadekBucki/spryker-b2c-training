<?php

declare(strict_types = 1);

namespace Pyz\Yves\Training\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

/**
 * @method \Pyz\Yves\Training\TrainingConfig getConfig()
 */
class TrainingWidget extends AbstractWidget
{
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Training';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@Training/views/training/WidgetViewTwig.twig';
    }
}
