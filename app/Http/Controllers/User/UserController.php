<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.home');
    }

    public function profil()
    {
        return view('user.profil');
    }
}
