<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="app_service")
     */
     public function index(): JsonResponse
     {
         return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ServiceController.php',
         ]);
    }
    /**
     * @Route("/create", name="app_service")
     */
    public function creatAction(): JsonResponse
    {
        return $this->json([
           'message' => 'a new service!',
           'path' => 'src/Controller/ServiceController.php',
        ]);
    }
}