<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    //

    public function home()
    {
        return view('back.home');
    }


    public function settings()
    {
        return view('back.settings');
    }

    public function message()
    {
        return view('back.message');
    }
    public function traite()
    {
        return view('back.traite');
    }

    public function encours()
    {
        return view('back.encours');
    }
}
