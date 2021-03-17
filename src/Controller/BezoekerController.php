<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BezoekerController extends AbstractController
{
    /**
     * @Route("/bezoeker", name="bezoeker")
     */
    public function index(): Response
    {
        return $this->render('bezoeker/index.html.twig', [
            'controller_name' => 'BezoekerController',
        ]);
    }

    /**
     * @Route("/kartactiviteiten", name="kartactiviteiten")
     */
    public function kartactiviteitenAction()
    {
        $repository=$this->getDoctrine()->getRepository(Soortactiviteit::class);
        $soortactiviteiten=$repository->findAll();
        return $this->render('bezoeker/kartactiviteiten.html.twig',array('boodschap'=>'Welkom','soortactiviteiten'=>$soortactiviteiten));
    }
}
