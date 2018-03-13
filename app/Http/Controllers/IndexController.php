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
    public function ValidReg(Request $request, $login){
        $user = Users::where('login', $login)->get()[0];
        $user->valid = 1;
        $user->save();
        Session::put('user', $user);
        return view('index', ['message' => 'Merci pour votre inscription :) Signé, le DIGI']);
    }

    public function DeleteReg(Request $request, $id){
        Users::where('id', $id)->delete();
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

}
