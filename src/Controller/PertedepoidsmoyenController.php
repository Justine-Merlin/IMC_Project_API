<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PertedepoidsmoyenController extends AbstractController
{
    #[Route('/pertedepoidsmoyen', name: 'pertedepoidsmoyen')]
    public function index(): Response
    {
        return $this->render('pertedepoidsmoyen/index.html.twig', [
            'controller_name' => 'PertedepoidsmoyenController',
        ]);
    }
}
