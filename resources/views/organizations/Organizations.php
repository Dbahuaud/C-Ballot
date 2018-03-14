<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
                    return view('index', ['message' => 'Organisation Créée']);
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




    public static function DeleteOrg(Request $request) {
         $id_user = $request->session()->get('user')->id;
         $organization = Organizations::where('id', $request->session()->get('user')->id);
         Mail::send('mail.deleteOrg', ['organization' => $organization], function ($message) use($request){
             $message->to($request->session()->get('user')->email, $request->session()->get('user')->firstname . " " . $request->session()->get('user')->lastname)->subject("Validation de la suppression de votre Organisation");
         });
    return redirect('/');
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
}
