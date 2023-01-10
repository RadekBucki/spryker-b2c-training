<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Business;

use Pyz\Zed\HelloSpryker\Business\Reader\HelloSprykerReader;
use Pyz\Zed\HelloSpryker\Business\Reader\HelloSprykerReaderInterface;
use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverser;
use Pyz\Zed\HelloSpryker\Business\Reverser\StringReverserInterface;
use Pyz\Zed\HelloSpryker\Business\Writer\HelloSprykerWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\HelloSpryker\HelloSprykerConfig getConfig()
 */
class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\HelloSpryker\Business\Reverser\StringReverserInterface
     */
    public function createStringReverser(): StringReverserInterface
    {
        return new StringReverser();
    }

    /**
     * @return \Pyz\Zed\HelloSpryker\Business\Reader\HelloSprykerReaderInterface
     */
    public function createStringReader(): HelloSprykerReaderInterface
    {
        return new HelloSprykerReader($this->getRepository());
    }

    /**
     * @return \Pyz\Zed\HelloSpryker\Business\Writer\HelloSprykerWriterInterface
     */
    public function createStringWriter()
    {
        return new HelloSprykerWriter($this->getEntityManager());
    }
}
