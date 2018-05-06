<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index()
    {
        return view('admin.dashboard');
    }

    function allUsers()
    {
        $users = User::all();
        return view('admin.admin_users')
            ->with('users',$users);
    }
}
