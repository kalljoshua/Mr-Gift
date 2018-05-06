<?php

namespace App\Http\Controllers\User;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! session()->has('success_message')) {
            return redirect('/');
        }

        $order_id = session()->get('order_id');
        $order = Order::find($order_id);
        return view('user.confirmation')
            ->with('order',$order);
    }


}
