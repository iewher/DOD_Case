<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ShoesRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Shoes;

class HomeController extends AbstractController
{

    public function __construct(private readonly ShoesRepository $shoesRepository, private readonly EntityManagerInterface $entityManagerInterface)
    {
    }

    public function index(): Response
    {

        $products = $this->entityManagerInterface->getRepository(Shoes::class)->findAll();

        // dd($product->getId());

        // $posters = [
        //     'poster1' => 'images/posters/poster1.jpg',
        //     'poster2' => 'images/posters/poster2.jpg',
        //     'poster3' => 'images/posters/poster3.jpg',
        //     'poster4' => 'images/posters/poster4.jpg',
        // ];

        // $cards = [
        //     'nike_zoom' => [
        //         'title' => 'Nike Zoomx Vaporfly Next',
        //         'price' => 31990,
        //         'image' => 'images/cards/nikezoom.jpg',
        //     ],
        //     'jordan' => [
        //         'title' => 'Jordan 1 Retro High Utility SP',
        //         'price' => 24990,
        //         'image' => 'images/cards/jordan.jpg',
        //     ],
        //     'nike_air' => [
        //         'title' => 'Nike Air Max 97',
        //         'price' => 19900,
        //         'image' => 'images/cards/nikeair.jpg',
        //     ],
        //     'diadora' => [
        //         'title' => 'Diadora N9000 Rally Giulietta',
        //         'price' => 26790,
        //         'image' => 'images/cards/diadora.jpg',
        //     ],

        // ];
        // $cards = $this->shoesRepository->findAll();
        return $this->render("home/index.html.twig", ['products' => $products]);
    }
}
