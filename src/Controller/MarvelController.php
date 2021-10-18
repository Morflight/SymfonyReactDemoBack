<?php

namespace App\Controller;

use App\Repository\MarvelHeroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class MarvelController extends AbstractController
{
    /**
     * @Route("/test")
     */
    public function index(MarvelHeroRepository $marvelHeroRepository): Response
    {
        return $this->json($marvelHeroRepository->getHeroes());
    }
}