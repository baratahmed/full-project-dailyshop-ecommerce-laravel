<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $product = Product::find($request->id);
        Cart::add([
            'id' => $request->id,
            'name' => $product->product_name, 
            'price' => $product->product_price,
            'weight' => 100,
            'qty' => $request->qty, 
            'options' => [
                'image' => $product->product_image
            ] 
        ]);

        return redirect()->route('show-cart');
    }

    public function showCart(){
        $cartProducts = Cart::content();
        //return $cartProducts;
        //dd($cartProducts);
    	return view('front-end.cart.show-cart',['cartProducts'=>$cartProducts]);
    }

    public function deleteCart($id){
        Cart::remove($id);
        return redirect()->route('show-cart');
    	// return redirect('/cart/show');
    }
    public function updateCart(Request $request){
        Cart::update($request->rowId, $request->qty);
        return redirect()->route('show-cart');
    	// return redirect('/cart/show');
    }
}
