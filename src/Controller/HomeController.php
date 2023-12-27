<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function index(): Response
    {
        $posters = [
            'poster1' => 'images/posters/poster1.jpg',
            'poster2' => 'images/posters/poster2.jpg',
            'poster3' => 'images/posters/poster3.jpg',
            'poster4' => 'images/posters/poster4.jpg',
        ];

        $cards = [
            'nike_zoom' => [
                'title' => 'Nike Zoomx Vaporfly Next',
                'price' => 31990,
                'image' => 'images/cards/nikezoom.jpg',
            ],
            'jordan' => [
                'title' => 'Jordan 1 Retro High Utility SP',
                'price' => 24990,
                'image' => 'images/cards/jordan.jpg',
            ],
            'nike_air' => [
                'title' => 'Nike Air Max 97',
                'price' => 19900,
                'image' => 'images/cards/nikeair.jpg',
            ],
            'diadora' => [
                'title' => 'Diadora N9000 Rally Giulietta',
                'price' => 26790,
                'image' => 'images/cards/diadora.jpg',
            ],

        ];

        return $this->render("home/index.html.twig", ["cards" => $cards, "posters" => $posters]);
    }
}
