<?php
require_once './vendor/autoload.php';

$app = new \App\Application();

$app
    ->mount('/', new App\Controller\Provider\IndexControllerProvider())
;

$app->run();