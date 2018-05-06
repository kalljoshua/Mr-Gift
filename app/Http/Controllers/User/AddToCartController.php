<?php

namespace App\Http\Controllers\User;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Auth;

class AddToCartController extends Controller
{
    //
    function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        return redirect()->back();
    }

    function getShoppingCart()
    {
        if (!Session::has('cart'))
        {
            return view('user.shopping_cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('user.shopping_cart',['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

    function getCheckOut()
    {
        if (!Session::has('cart'))
        {
            return view('user.shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        $order = new Order();
        $order->cart = serialize($cart);
        $order->user_id = Auth::guard('user')->id();
        $order->address = "Mukono, uganda";

        if ($order->save())
        {
            Session::forget('cart');
            return view('user.checkout')
                ->with('total', $total);
        }

    }
}
