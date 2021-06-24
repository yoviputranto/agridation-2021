<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function daftarLomba()
    {
        return view('user.lomba.daftar');
    }

    public function formDaftar()
    {
        return view('user.lomba.form');
    }

    public function listLomba()
    {
        return view('user.lomba.list');
    }

    public function detailLomba()
    {
        return view('user.lomba.lomba');
    }
}
