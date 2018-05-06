<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Input, Redirect;
use App\User;

class AuthenticationController extends Controller
{
    //
    function loginRegister()
    {
        return view('user.authenticate');
    }

    function registerUser(Request $request)
    {
        $user = new User();

        if(Input::has('name')) $user->name = Input::get('name');
        if(Input::has('phone')) $user->phone = Input::get('phone');
        if(Input::has('email')) $user->email = Input::get('email');
        if(Input::has('pass')) $pass = Input::get('pass');
        if(Input::has('password')) $password = Input::get('password');
        $user->token = str_random(25);

        $check_agent_email = User::where('email',Input::get('email'))->get();
        if(sizeof($check_agent_email)>0)
        {
            flash('Email Address has already been registered.')->warning();
            return Redirect::back();
        }

        if($pass==$password)
        {
            $user->password = bcrypt($password);
        }else{
            flash('Passwords do not match!')->error();
            return Redirect::back()->withInput(Input::all());
        }

        if($user->save())
        {
            $user->sendVerificationEmail();
            flash('Your account has successfully been created')->success();
            return redirect(route('user.login.register'));
        }else{
            flash('Error submitting your details. Try again later!')->error();
            return Redirect::back()->withInput(Input::all());
        }

    }
}
