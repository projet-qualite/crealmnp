<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContact;

class MailController extends Controller
{
    //

    public function mail(Request $request){
        $name = [$request->email,$request->nom,$request->sujet, $request->message];

        var_dump($name[3]) ;
        Mail::to('marshalfry1998@gmail.com')->send(new MailContact($name));

        Session::put('status_success','Votre message a été bien réceptionné');

        //return redirect('/home');
        

        }
}
