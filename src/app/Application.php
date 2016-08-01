<?php

namespace App;

use Symfony\Component\Yaml\Yaml;

class Application extends \Silex\Application
{
    public function __construct()
    {
        parent::__construct(Yaml::parse(file_get_contents( __DIR__ . '/config/config.yml')));
    }
}