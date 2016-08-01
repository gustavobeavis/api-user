<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController
{
    public function index(){
        return new JsonResponse(['teste' => 10], 200);
    }

}