<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    /**
     * Lists the hard-coded products. Hard-coded on purpose: the test only
     * covers the route, controller and view flow, not a database.
     */
    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        $products = [
            ['name' => 'Kip', 'price' => 10.00],
            ['name' => 'Watermeloen', 'price' => 15.00],
            ['name' => 'Sneakers', 'price' => 67.00],
        ];

        return $this->render('product/index.html.twig', ['products' => $products]);
    }
}
