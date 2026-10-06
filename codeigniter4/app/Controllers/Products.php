<?php

namespace App\Controllers;

class Products extends BaseController
{
    /**
     * Lists the hard-coded products. Hard-coded on purpose: the test only
     * covers the route, controller and view flow, not a database.
     */
    public function index(): string
    {
        $products = [
            ['name' => 'Kip', 'price' => 10.00],
            ['name' => 'Watermeloen', 'price' => 15.00],
            ['name' => 'Sneakers', 'price' => 67.00],
        ];

        return view('products', ['products' => $products]);
    }
}
