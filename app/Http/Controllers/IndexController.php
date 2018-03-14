<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\Votes;
use App\Participants;
use App\Organizations;
use App\Events;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function Form(){
        return view('form');
    }
    public function FormSubmit(Request $request){
        return Users::AddUser($request);
    }
    public function Connect(Request $request){
        return Users::ConnectUser($request);
    }
    public function ValidReg(Request $request, $unicode){
        $user = Users::where('unicode', $unicode)->get()[0];
        $user->valid = 1;
        $user->save();
        Session::put('user', $user);
        return view('index', ['message' => 'Merci pour votre inscription :) Signé, le DIGI']);
    }

    public function DeleteUser(Request $request, $unicode) {
        $user = Users::where('unicode', $unicode)->get()[0];
        $user->delete();
        return redirect('/');
    }
    public function Disconnect(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
    public function UpdateUser(Request $request){
        return Users::UpdateUser($request);
    }

    public function Index(Request $request){
        return view('index');
    }

    public function Forgot() {
        return view('forgot');
    }

    public function ForgotSubmit(Request $request) {
        return Users::ForgotUser($request);
    }

    public function ChangePassword(Request $request, $unicode) {
        $user = Users::where('unicode', $unicode)->get()[0];
        return view('changepass', ['user' => $user]);
    }

    public function ChangePass(Request $request) {
        $input = $request->all();
        if ($input['password'] == $input['passwordc']) {
            $user = Users::where('unicode', $input['unicode'])->get()[0];
            $user->password = md5($input['password']);
            Mail::send('mail.valid_change_pass', ['user' => $user],function ($message) use($user) {
                $message->to($user->email, $user->firstname . " " . $user->lastname)->subject("Mots de passe changé");
            });
            $user->save();
        }
        return redirect('/');
    }

    /**
     * ############################################## fonction organisation ########################################""
     */


    public function FormSubmitOrg(Request $request){
        return Organizations::AddOrg($request);
    }

    public function DeleteOrg(Request $request, $unicode) {
        return Organizations::DeleteOrg($request);
    }

    public function UpdateOrg(Request $request){
        return Organization::UpdateOrg($request);
    }


    //Fonction validation organisation
    public function UserCompte(Request $request, $login)
    {
        $user = Users::where('login', urldecode($login))->get()[0];

        return view('FredUser', ["user" => $user]);
    }
}
