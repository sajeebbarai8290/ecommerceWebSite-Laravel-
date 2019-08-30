<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request) {
        $productId = $request->productId;
        $productById = Product::where('id', $productId)->first();
        Cart::add([
            'id'=>$productId,
            'name'=>$productById->productName,
            'price'=>$productById->productPrice,
            'qty'=>$request->qty,
        ]);
        return redirect('/cart/show');
    }
    public function showCart() {
        $cartProducts = Cart::content();
        return view('frontEnd.cart.showCart', ['cartProducts'=>$cartProducts]);
    }
    public function deleteCartProduct($id) {
        Cart::remove($id);
        return redirect('/cart/show');
    }
}
