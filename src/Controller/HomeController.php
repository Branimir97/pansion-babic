<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
//    /**
//     * @Route({
//     *     "hr": "/",
//     *     "en": "/homepage",
//     *     "it": "/prima-pagina",
//     *     "de": "/titleseite"
//     *  }, name="homepage")
//     */
    #[Route("/")]
    public function indexAction(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
