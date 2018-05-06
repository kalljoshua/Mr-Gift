<?php

namespace App\Http\Controllers\Admin;

use App\ProductRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{

    function serviceRequests()
    {
        $requests = ProductRequest::all();
        return view('admin.product_requests')
            ->with('requests',$requests);
    }
}
