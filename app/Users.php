<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Mail;

class Users extends Model
{
    public $table = 'user';

    public static function Unicode($lenght) {
        return (str_random($lenght));
    }

    public static function AddUser(Request $request){

        //Besoin pour un new user : login, password, email, firstname, lastname
        //Valid = bouton d'actiivation
        //Noms Inputs formulaire : login, password(hash), confirmation(hash), email(if exists), firstname, lastname
        $inputs = $request->All();
        $newUser = new Users();
        if (!empty($inputs['login']) && !empty($inputs['password']) && !empty($inputs['confirmation'])
        && !empty($inputs['firstname']) && !empty($inputs['lastname'])){
            if($inputs['password'] == $inputs['confirmation']){
                $number_email = Users::where('email', $inputs['email'])->count();
                $number_login = Users::where('login', $inputs['login'])->count();
                if($number_email == 0 && $number_login == 0){
                    $newUser->login = $inputs['login'];
                    $newUser->password = md5($inputs['password']);
                    $newUser->email = $inputs['email'];
                    $newUser->firstname = $inputs['firstname'];
                    $newUser->lastname = $inputs['lastname'];
                    $newUser->unicode = Users::Unicode(25);
                    $newUser->valid = 0;
                    $newUser->save();
                    Mail::send('mail.register', ['newUser' => $newUser], function ($message) use ($newUser) {
                        $message->to($newUser->email, $newUser->firstname . " " . $newUser->lastname)->subject('Validation d\'inscription');
                    });
                    return view('index', ['message' => 'Vous avez reçu un mail pour valider votre compte... C-Ballot']);
                }
                else{
                    $error = 'Email ou Pseudo déjà existant';
                    return view('false', ['error' => $error]);
                }
            }
            else{
                $error = 'Veuillez entrer le même mot de passe';
                return view('false', ['error' => $error]);
            }
        }
        else{
            $error = 'Veuillez remplir tous les champs';
            return view('false', ['error' => $error]);
        }
    }

    //Besoin pour une connexion : login ou email et password
    //Valid = bouton d'activation
    //noms inputs formulaire : account, password
    public static function ConnectUser(Request $request){
        $inputs = $request->All();
        if(!empty($inputs['account']) && !empty($inputs['password'])){
            $number = Users::where('login', $inputs['account'])->count();
            if($number != 0){
                $user = Users::where('login', $inputs['account'])->get()[0];
                if(md5($inputs['password']) == $user->password){
                    Session::put('user', $user);
                    return view('index', ['message' => 'Bienvenue']);
                }
                else{
                    return view('false');
                }
            }
            else{
                $number = Users::where('email', $inputs['account'])->count();
                if($number != 0){
                    $user = Users::where('email', $inputs['account'])->get()[0];
                    if(md5($inputs['password']) == $user->password){
                        Session::put('user', $user);
                        return view('index', ['message' => 'Bienvenue']);
                    }
                    else{
                        $error = 'Email ou Mot de passe incorrect';
                        return view('false', ['error' => $error]);
                    }
                }
                else{
                    $error = 'Email ou Mot de passe incorrect';
                    return view('false', ['error' => $error]);
                }
            }

        }
        else{
            $error = 'Email ou Mot de passe incorrect';
            return view('false', ['error' => $error]);
        }

    }

    public static function UpdateUser(Request $request) {
        $inputs = $request->all();
        $user = Users::where('id', $request->session()->get('user')->id)->get()[0];
        if(!empty($inputs['email']) && !empty([$inputs['password']]))
        {
            $user->password = md5($inputs['password']);
            $user->email = $inputs['email'];
            $user->save();
            return view('form');
        }
        else{
            $error = 'Veuillez saisir un Email ou un Mot de passe valide';
            return view('false', ['error' => $error]);
        }
    }

    public static function DeleteUser(Request $request) {
        $user = Users::where('id', $request->session()->get('user')->id);
        Mail::send('mail.delete', ['user' => $user], function ($message) use($user){
            $message->to($user->email, $user->firstname . " " . $user->lastname)->subject("Validation de la suppression de votre compte");
        });
        return redirect('/');
    }

    public static function ForgotUser(Request $request) {
        $inputs = $request->all();
        $user = Users::where('email', $inputs['email'])->get()[0];
        Mail::send('mail.forgot', ['user' => $user], function($message) use($user) {
            $message->to($user->email, $user->firstname . " " . $user->lastname)->subject("Réinitialisation de votre mots de passe");
        });
        return redirect('/');
    }
}
