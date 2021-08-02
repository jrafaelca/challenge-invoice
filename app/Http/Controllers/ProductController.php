<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke()
    {
        $product = Product::make([
            'name'     => 'New Product',
            'quantity' => 1,
            'price'    => 100,
        ]);
        $product->invoice()->associate(1);
        $product->save();

        return $product;
    }
}
