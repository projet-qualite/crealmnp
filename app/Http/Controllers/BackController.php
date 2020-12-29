<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Demande;
use Session;
use DB;

class BackController extends Controller
{
    //

    public function home()
    {
        if(Session::has('client'))
        {
            return view('back.home');
        }
        else{
            if(Session::has('admin'))
            {
                $demandes = DB::table('demandes')
                            ->join('clients', 'clients.id', '=', 'demandes.id_client')
                            ->select('*')
                            ->where('etat', 'E')
                            ->get();
                $demandes_en_cours_n = Demande::where('etat', 'E')->count();
                $demandes_traite_n = Demande::where('etat', 'F')->count();
                $clients_n = Client::count() - 1;

                Session::put('demandes', $demandes);
                Session::put('demandes_en_cours_n', $demandes_en_cours_n);
                Session::put('demandes_traite_n', $demandes_traite_n);
                Session::put('clients_n', $clients_n);

                return view('back.home');
            }
            else{
                return view('front.home');
            }
            
        }
        
    }


    public function settings()
    {

        if(Session::has('client') || Session::has('admin'))
        {
            return view('back.settings');
        }
        else{
            return view('front.home');
        }
        
    }

    public function message()
    {
        if(Session::has('client') || Session::has('admin'))
        {
            return view('back.message');
        }
        else{
            return view('front.home');
        }
        
    }
    public function traite()
    {
        if(Session::has('client') || Session::has('admin'))
        {
            $demandes = Demande::where("etat", "F")->orderBy('created_at', 'DESC')->get();
            return view('back.traite')->with('demandes', $demandes);
        }
        else{
            return view('front.home');
        }
        
    }

    public function encours()
    {
        if(Session::has('client') )
        {
            $demandes = Demande::where('id_client', Session::get('client')->id)->where('etat', 'E')->get();

            return view('back.encours')->with('demandes', $demandes);
        }
        else{
            if( Session::has('admin'))
            {
                $demandes = Demande::where('etat', 'E')->orderBy('updated_at','DESC')->get();
                return view('back.encours')->with('demandes', $demandes);
            }
            else{
                return view('front.home');
            }
            
        }
        
    }

    public function demande()
    {
        if(Session::has('client') || Session::has('admin'))
        {
            return view('back.demande');
        }
        else{
            return view('front.home');
        }
        
    }

    public function modifier_parametre(Request $request)
    {
        if(Session::has('client') || Session::has('admin'))
        {
            $client = Client::find(Session::get('client')->id);

            $client->nom = $request->nom;
            $client->prenom = $request->prenom;
            $client->email = $request->email;
            $client->telephone = $request->telephone;

            //var_dump($request->nom);

            $client->birthday = $request->birthday;
            $client->adresse = $request->adresse;
            $client->code_postal = $request->code_postal;
            $client->departement = $request->departement;
            $client->ville = $request->ville;

            $client->update();

            Session::put('client', $client);
            Session::put('status_success', 'Sauvegarde des modifications');
            
            return redirect('/settings');


        }

        else{
            return view('front.home');
        }
    }

    public function download($nom)
    {
        if(Session::has('client') || Session::has('admin'))
        {
            $file = basename($nom);
            $filepath = 'fichiers/'.$file;

            if(file_exists($filepath)) {
                
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filepath));
                flush(); // Flush system output buffer
                readfile($filepath);
                die();
            } else {
                http_response_code(404);
                die();
            }

            return redirect('/encours');

        }

        else{
            return view('front.home');
        }


    }

    public function modifier_demande($id)
    {
        $demande = Demande::find($id);




        //var_dump($demande);
        return view('back.modifier_demande')->with('demande', $demande);
    }

    public function modifier(Request $request, $id)
    {
        if(Session::has('client') || Session::has('admin'))
        {
            $demande = Demande::find($id);

            $demande->departement_naissance = $request->departement_birthday;
            $demande->adresse = $request->user_input_autocomplete_address;
            $demande->code_postal = $request->postal_code2;
            $demande->ville = $request->locality2;

            if($request->fichier1 != "")
            {
                $extention1 = $request->file('fichier1')->getClientOriginalName();
                $filename1 = pathinfo($extention1, PATHINFO_FILENAME);
                $ext1 = $request->file('fichier1')->getClientOriginalExtension();
                $filesaver1 = $filename1.'_'.time().'.'.$ext1;
                $path1 = $request->file('fichier1')->move('fichiers/',$filesaver1);

                $demande->fichier1 = $filesaver1;
               
            }

            if($request->fichier2 != "")
            {
                $extention2 = $request->file('fichier2')->getClientOriginalName();
                $filename2 = pathinfo($extention2, PATHINFO_FILENAME);
                $ext2 = $request->file('fichier2')->getClientOriginalExtension();
                $filesaver2 = $filename2.'_'.time().'.'.$ext2;
                $path2 = $request->file('fichier2')->move('fichiers/',$filesaver2);

                $demande->fichier2 = $filesaver2;
            }



            $demande->update();

            Session::put('status_success_modif', 'Sauvegarde éffectuées avec succès');
            
            return redirect('/encours');


        }

        else{
            return view('front.home');
        }
    }


    public function send_demande(Request $request)
    {
        if(Session::has('client') || Session::has('admin'))
        {
            $demande = new Demande();
                               
            $demande->departement_naissance = $request->departement_birthday;
            $demande->adresse = $request->user_input_autocomplete_address;
            $demande->code_postal = $request->postal_code2;
            $demande->ville = $request->locality2;
            $demande->fichier1 = $request->fichier1;
            $demande->fichier2 = $request->fichier2;
            $demande->id_client = Session::get('client')->id;

            $demande->etat = "E";
            $demande->paye = "N";

            $extention1 = $request->file('fichier1')->getClientOriginalName();
            $filename1 = pathinfo($extention1, PATHINFO_FILENAME);
            $ext1 = $request->file('fichier1')->getClientOriginalExtension();
            $filesaver1 = $filename1.'_'.time().'.'.$ext1;
            $path1 = $request->file('fichier1')->move('fichiers/',$filesaver1);

            $extention2 = $request->file('fichier2')->getClientOriginalName();
            $filename2 = pathinfo($extention2, PATHINFO_FILENAME);
            $ext2 = $request->file('fichier2')->getClientOriginalExtension();
            $filesaver2 = $filename2.'_'.time().'.'.$ext2;
            $path2 = $request->file('fichier2')->move('fichiers/',$filesaver2);



            $demande->fichier1 = $filesaver1;
            $demande->fichier2 = $filesaver2;

            //var_dump($request->postal_code);

            $demande->save();

            Session::put('status_success', 'Demande envoyée avec succès');



            return redirect('/paiement');

        }

        else{
            return view('front.home');
        }
    }


    public function paiement(Request $request)
    {
        if(Session::has('client') || Session::has('admin'))
        {
            return view('back.paiement');

        }

        else{
            return view('front.home');
        }

    }

    public function liste_admin()
    {
        if(Session::has('admin'))
        {
            $clients_l = Client::where('id', '!=', 0)->orderBy('nom', 'DESC')->get();

            return view('back.liste_admin')->with('clients_l', $clients_l);

        }

        else{
            return view('front.home');
        }
        
    }

    public function detail_client($id)
    {
        if(Session::has('admin'))
        {
            $client_detail = Client::find($id);
            $demandes_en_cours_n = Demande::where('id_client', $id)->where('etat', 'E')->count();
            $demandes_traite_n = Demande::where('id_client', $id)->where('etat', 'F')->count();

            $demandes_en_cours = Demande::where('id_client', $id)->where('etat', 'E')->get();
            $demandes_traite = Demande::where('id_client', $id)->where('etat', 'F')->get();

            //var_dump($demandes_en_cours);


            return view('back.detail_client')
            ->with('client_detail', $client_detail)
            ->with('demandes_en_cours_n', $demandes_en_cours_n)
            ->with('demandes_traite_n', $demandes_traite_n)
            ->with('demandes_en_cours', $demandes_en_cours)
            ->with('demandes_traite', $demandes_traite);

            

        }

        else{
            return view('front.home');
        } 
    }


    public function valider($id_client,$id)
    {
        if(Session::has('admin'))
        {
            $client_detail = Client::find($id_client);
            $demande = Demande::find($id);
            //var_dump($demande->payer);

            if($demande->paye == 'N')
            {
                Session::put('status_fail_valid','Opération impossible! Cette prestation n\'a pas été payé par le client.');
            }
            else{
                Session::put('status_success_valid','Cette prestation pas été validée avec succès.');
                $demande->etat = 'F';
                $demande->update();
            }

            //var_dump($demandes_en_cours);


            return redirect("/detail_client/$id_client");
            

            

        }

        else{
            return view('front.home');
        } 
    }


    public function contacter_client($id)
    {
        if(Session::has('admin'))
        {
            $client = Client::find($id);

            return view('back.contact_client')->with('client', $client);

        }

        else{
            return view('front.home');
        } 
    }
}
