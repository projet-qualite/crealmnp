<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function home()
    {
        return view('front.home');
    }

    public function services()
    {
        return view('front.services');
    }


    public function apropos()
    {
        return view('front.apropos');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function connexion()
    {
        return view('front.connexion');
    }


    public function inscription()
    {
        return view('front.inscription');
    }

    public function forgot()
    {
        return view('front.forgot');
    }
}
