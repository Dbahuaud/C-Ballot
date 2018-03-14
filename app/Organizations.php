<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Events;
use App\Answers;
use App\Votes;

class Organizations extends Model
{
    public $table = 'organization';

    public static function AddOrg(Request $request){

        //Besoin pour une new organization : name, siret
        //Valid = bouton d'actiivation
        //Noms Inputs formulaire : name, siret
        $inputs = $request->All();
        $newOrg = new Organizations();

        if (!empty($inputs['name']) && !empty($inputs['siret'])){
            $number_siret = Organizations::where('siret', $inputs['siret'])->count();
            if($number_siret == 0){
                $newOrg->name = $inputs['name'];
                $newOrg->siret = $inputs['siret'];
                $newOrg->unicode = $inputs['siret'];
                $newOrg->id_user = $request->session()->get('user')->id;
                $newOrg->save();
                Mail::send('mail.registerOrg', ['newOrg' => $newOrg], function ($message) use ($request) {
                    $message->to($request->session()->get('user')->email, $request->session()->get('user')->firstname . " " . $request->session()->get('user')->lastname)->subject('Organisation Créée');
                });
                return redirect('/')->with('message', 'Organisation Créée');
            }
            else{
                $error = 'Numéro de Siret déjà utilisé';
                return view('false', ['error' => $error]);
            }
        }
        else{
            $error = 'Veuillez remplir tous les champs';
            return view('false', ['error' => $error]);
        }
    }

    public static function UpdateOrg(Request $request) {
        $inputs = $request->all();
        $org = Organizations::where('id', $inputs['id'])->get()[0];
        if (strlen($inputs['siret']) == 9 && !empty($inputs['name']) && $request->session()->get('user')->id == $org->id_user) {
            $org->siret = $inputs['siret'];
            $org->name = $inputs['name'];
            $org->save();
            return redirect('/');
        }
        else
            return redirect()->route('index', ['message' => "Veuillez remplir tous les champs"]);
    }

    public static function Deleter(Request $request, $name) {
        $user = $request->session()->get('user');
        $org = Organizations::where('name', urldecode($name))->get()[0];
        Mail::send('mail.del_org', ['org' => $org, 'user' => $user], function ($message) use($user) {
            $message->to($user->email,$user->firstname . " " . $user->lastname)->subject("Validation de la suppression de votre Organisation");
        });
        return view('index', ['message' => "Veuillez valider la suppression de l'organisation via le mail qui vous à été envoyé"]);
    }

    public static function DeleterValid(Request $request, $unicode) {
        $org_uni = Organizations::where('unicode', $unicode)->get()[0]->unicode;
        $event = Events::where('unicode_owner', $org_uni)->get();
        foreach($event as $e) {
            $answer = Answers::where('id_event', $e->id)->get();
            foreach($answer as $a) {
                Votes::where('id_answer', $a->id)->delete();
            }
            Answers::where('id_event', $e->id)->delete();
            Participants::where('id_event', $e->id)->delete();
        }
        Events::where('unicode_owner', $org_uni)->delete();
        Organizations::where('unicode', $unicode)->delete();
        return redirect('/');
    }
}
