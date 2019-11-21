<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="prostage_Accueil")
     */
    //Route vers l'accueil

    public function indexAccueil()
    {
        return new Response ("<html><head><title>Accueil</title></head>
                            <body><h1>Bienvenue sur la page d'accueil de Prostages</h1></body></html>");
    }
    /**
     * @Route("/entreprises", name="prostage_Entreprises")
     */
    //Route vers l'accueil
    public function indexEntreprises()
    {
        return new Response ("<html><head><title></title></head>
                            <body><h1>Cette page affichera la liste des entreprises proposant un stage</h1></body></html>");
    }
    /**
     * @Route("/formations", name="prostage_Formations")
     */
    //Route vers l'accueil
    public function indexFormations()
    {
        return new Response ("<html><head><title>Formations</title></head>
                            <body><h1>Cette page affichera la liste des formations de l'IUT</h1></body></html>");
    }
    /**
     * @Route("/stages/{id}", name="prostage_Stages")
     */
    //Route vers l'accueil
    public function indexStages($id)
    {
        return new Response ("<html><head><title>Stages</title></head>
                            <body><h1>Cette page affichera le descriptif du stage ayant pour identifiant $id </h1>
                            </body></html>");
    }
}
