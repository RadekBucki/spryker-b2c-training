<?php

declare(strict_types=1);

namespace Pyz\Zed\Application\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function indexAction(): JsonResponse
    {
        return $this->jsonResponse(['data' => 'Hello DE Store!']);
    }
}
