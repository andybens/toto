<?php

// src/DemoBundle/Controller/AdvertController.php

namespace DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('DemoBundle:Advert:index.html.twig');

        return new Response($content);
    }

    public function viewAction($id)
    {
        // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

        // Ici, on récupèrera depuis la base de données
        // l'annonce correspondant à l'id $id.
        // Puis on passera l'annonce à la vue pour
        // qu'elle puisse l'afficher

        return new Response("Affichage de l'annonce d'id : ".$id);
    }

    // On récupère tous les paramètres en arguments de la méthode
    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
    }


}