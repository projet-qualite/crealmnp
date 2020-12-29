<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Session;

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

    public function inscrire(Request $request)
    {
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->mdp = $request->mdp;

        $client2 = Client::where('email', $request->email)->first();
        if(is_null($client2))
        {
            $client->save();

            Session::put('status_success', 'Vous fêtes inscrit! vous pouvez désormais vous connecter ');

            return redirect('/inscription');
        }
        else
        {
            Session::put('status_fail', 'Email existe déjà');
            return redirect('/inscription');
        }

        
    }

    public function connecter(Request $request)
    {
        echo "mail: ".$request->email. " et mdp: ".$request->mdp;
        $client = Client::where('email', $request->email)->where('mdp', $request->mdp)->first();

        var_dump($client);
        if(is_null($client))
        {
            //print("C'est null mon gars");
            Session::put('status_fail', 'Email ou mot de passe incorrecte ');
            return redirect('/connexion');

        }
        else{
            if($client->id == 0)
            {
                Session::put('admin', $client);
            }
            else{
                Session::put('client', $client);
            }

            
            return redirect('/');
        }

       
    }

    public function logout()
    {
       Session::put('client', null);
       Session::put('admin', null);

        return redirect('/');
    }
}
