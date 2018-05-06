<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyController extends Controller
{
    public function verify($token)
    {
        User::where('token',$token)->firstOrFail()
            ->update(['token'=>null]);

        flash('Account verified successfully')->success();
        return redirect(route('user.products'));
    }
}
