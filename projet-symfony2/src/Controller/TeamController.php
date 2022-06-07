<?Php namespace App\Controller;

use App\Repository\TeamRepository;
use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TeamController extends AbstractController
{
    /**
     * @Route("/team", name="app_team")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'message' => 'Voici mon api en symfony',
        ]);
    }


     /**
     * @Route("/team/organigramme", name="app_team_organigramme")
     */
    public function organigramme()
    {

            $repository = $this->getDoctrine()->getRepository(Team::class); //Récupérer une collection d'objets
    
            // $user['findOneBy'] = $repository->findOneBy(['nom' => 'Albert']); // Rechercher un seul produit par son nom
          
    
            // $user['find'] = $repository->find(1);
    
            // $user['findBy'] =  $repository->findBy( ['nom' => 'Iguane'],
            // ['age' => 'ASC'],6,0);
    
           $message= $repository->findAll();
//var_dump($message);
           //error_log(print_r($message,1));
    
        // echo '<pre>',print_r($message,1),'</pre>';
    
        return $this->render('team/organigramme.html.twig',  compact('message')); //Envoie la vue sur la page twig
      
    }


}
