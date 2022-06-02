<?php

namespace App\Controller;

use App\Entity\UserService;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

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
     * @Route("/service/create", name="app_service_create")
     */
    public function createAction()
    {
        $entityManager=$this->getDoctrine()->getManager();
        $user= new UserService();
        $user->setNom("boby");
        $user->setAge(19);
        var_dump($user);
        $entityManager->persist($user);
        $entityManager->flush();
        return new Response('Utilsateur Ajouté');
        
    }
      /**
     * @Route("/service/search", name="app_service_search")
     */
     public function searchAction()
     {
         $repository=$this->getDoctrine()->getRepository(UserService::class);
         $answer['find']= $repository->find(1);
         $answer['findOneBy']=$repository->findOneBy(["nom"=>"iguane"]);
        $answer['findby']=$repository->findBy(["nom"=>"boby"],
            ["id"=>"ASC"],
            4,
            0);
         $answer['findAll']=$repository->findAll();
         var_dump($answer);
     return new Response('Recherche effectuée');
    
    // }
}
}