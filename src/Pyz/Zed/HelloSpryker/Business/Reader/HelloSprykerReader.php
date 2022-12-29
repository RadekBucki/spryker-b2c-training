<?php

declare(strict_types = 1);

namespace Pyz\Zed\HelloSpryker\Business\Reader;

use Generated\Shared\Transfer\HelloSprykerCollectionTransfer;
use Generated\Shared\Transfer\HelloSprykerCriteriaTransfer;
use Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface;

class HelloSprykerReader implements HelloSprykerReaderInterface
{
    private HelloSprykerRepositoryInterface $helloSprykerRepository;

    /**
     * @param \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface $helloSprykerRepository
     */
    public function __construct(HelloSprykerRepositoryInterface $helloSprykerRepository)
    {
        $this->helloSprykerRepository = $helloSprykerRepository;
    }

    /**
    * @param \Generated\Shared\Transfer\HelloSprykerCriteriaTransfer $helloSprykerCriteriaTransfer
    *
    * @return \Generated\Shared\Transfer\HelloSprykerCollectionTransfer
    */
    public function findHelloSpryker(HelloSprykerCriteriaTransfer $helloSprykerCriteriaTransfer): HelloSprykerCollectionTransfer
    {
        // ToDo: Implementation
        // $this->helloSprykerRepository->findHelloSpryker($helloSprykerCriteriaTransfer);
    }
}
