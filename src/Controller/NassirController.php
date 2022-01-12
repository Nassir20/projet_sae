<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NassirController extends AbstractController
{
   
 /**
     * @Route("/nassir", name="nassir")
     */
    public function index(): Response
    {
        return $this->render('nassir/index.html.twig', [
            'controller_name' => 'Nassir',
        ]);
    }
     /**
     * @Route("/cv", name="cv")
     */
    public function cv()
    {
        return $this->render('nassir/cv.html.twig', [
        ]);
    }
      /**
     * @Route("/portfolio", name="portfolio")
     */
    public function porfolio()
    {
        return $this->render('nassir/portfolio.html.twig', [
        ]);
    }
      /**
     * @Route("/loisirs", name="loisirs")
     */
    public function loisirs()
    {
        return $this->render('nassir/loisirs.html.twig', [
        ]);
    }
     /**
     * @Route("/accueil", name="accueil")
     */
    public function acceuil()
    {
        return $this->render('nassir/acceuil.html.twig', [
        ]);
    }
         /**
     * @Route("/ensavoir", name="ensavoir")
     */
    public function ensavoir()
    {
        return $this->render('nassir/ensavoir.html.twig', [
        ]);
    }
}
