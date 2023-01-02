<?php

declare(strict_types=1);

namespace Pyz\Yves\CustomerPage;

use Pyz\Client\Training\TrainingClientInterface;
use Pyz\Yves\CustomerPage\Form\FormFactory;
use Pyz\Yves\CustomerPage\Form\Transformer\AntelopeTransformer;
use SprykerShop\Yves\CustomerPage\CustomerPageFactory as SprykerCustomerPageFactory;

/**
 * @method \Pyz\Yves\CustomerPage\CustomerPageConfig getConfig()
 */
class CustomerPageFactory extends SprykerCustomerPageFactory
{
    /**
     * @return \Pyz\Yves\CustomerPage\Form\FormFactory
     */
    public function createCustomerFormFactory(): FormFactory
    {
        return new FormFactory();
    }

    /**
     * @return \Pyz\Yves\CustomerPage\Form\Transformer\AntelopeTransformer
     * @throws \Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function createAntelopeTransformer(): AntelopeTransformer
    {
        return new AntelopeTransformer(
            $this->getTrainingClient()
        );
    }

    /**
     * @return \Pyz\Client\Training\TrainingClientInterface
     * @throws \Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getTrainingClient(): TrainingClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::CLIENT_TRAINING);
    }
}
