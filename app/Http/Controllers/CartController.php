<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function view()
    {
        $carts = session('cart') ? session('cart') : [];

        return view ('home.cart-view', compact('carts'));
    }

    public function add(Product $product)
    {
        $carts = session('cart') ? session('cart') : [];

        if (isset($carts[$product->id])) {
            $carts[$product->id]->quantity += 1;
        } else {
            $cart_item = (object) [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->sale_price ? $product->sale_price : $product->price,
                'quantity' => 1
            ];
            
            $carts[$product->id] = $cart_item;
        }
       

        session(['cart' => $carts]);

       return redirect()->route('cart.view');
    }

    public function remove($id)
    {
        # code...
    }

    public function update($id)
    {
        # code...
    }

    public function clear()
    {
        # code...
    }
}
