<?php

declare(strict_types = 1);

namespace Pyz\Yves\Training\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class TrainingRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_NAME_TRAINING_ANTELOPE_NAME = 'training/antelope/_name_';

    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addTrainingAntelopeGetRoute($routeCollection);

        return $routeCollection;
    }

    private function addTrainingAntelopeGetRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('training/antelope/{name}', 'Training', 'Antelope', 'getAction');
        $route = $route->setMethods(['GET']);
        $routeCollection->add(static::ROUTE_NAME_TRAINING_ANTELOPE_NAME, $route);

        return $routeCollection;
    }


}
