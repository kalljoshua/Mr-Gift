<?php

namespace App\Http\Controllers\User;

use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::instance('default')->count() == 0) {
            return redirect()->route('home');
        }

        return view('user.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $order = $this->addToOrdersTables($request, null);
            Mail::send(new OrderPlaced($order));

        if ($order) {
            Cart::instance('default')->destroy();

            return redirect()->route('confirmation.index')
                ->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        }else{
            return redirect()->back()
                ->with('error_message', 'Sorry your payment was unsuccessful!');
        }



    }

    protected function addToOrdersTables($request, $error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => $request->user_id,
            'address' => $request->address,
            'city' => $request->city,
            'payment_getway' => $request->getway,
            'subtotal' => $request->subtotal,
            'transport' => $request->tax,
            'total' => $request->total,
        ]);

        session()->put('order_id', $order->id);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }

    private function getNumbers()
    {
        $tax = config('cart.tax') / 100;
        $discount = 1000;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);

        return collect([
            'tax' => $tax,
            'discount' => $discount,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
        ]);
    }
}
