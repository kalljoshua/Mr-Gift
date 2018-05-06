<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductRequest;
use Input,Redirect;

class RequestController extends Controller
{
    function submitRequest(Request $request)
    {
        $requests = new ProductRequest();
        if(Input::has('name')) $requests->name = Input::get('name');
        if(Input::has('occasion')) $requests->occasion = Input::get('occasion');
        if(Input::has('address')) $requests->address = Input::get('address');
        if(Input::has('date')) $requests->date = Input::get('date');
        if(Input::has('contact')) $requests->contact = Input::get('contact');
        if(Input::has('gender')) $requests->gender = Input::get('gender');
        if(Input::has('age')) $requests->age = Input::get('age');

        if($requests->save()){

            flash('Your request has successfully been sent')->success();
            return Redirect::back();
        }else{
            flash('Failed to send request')->error();
            return Redirect::back();
        }

    }


}
