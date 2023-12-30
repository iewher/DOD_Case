<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ShoesRepository;
use App\Repository\PostersRepository;

class HomeController extends AbstractController
{

    public function index(ShoesRepository $shoesRepository, PostersRepository $postersRepository): Response
    {
        $products = $shoesRepository->findAll();
        $posters = $postersRepository->findAll();

        return $this->render("home/index.html.twig", ['products' => $products, 'posters' => $posters]);
    }
}
