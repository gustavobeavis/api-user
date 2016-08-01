<?php
namespace App\Controller\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class IndexControllerProvider implements ControllerProviderInterface
{

    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', "App\\Controller\\IndexController::index");

        return $controllers;
    }
}