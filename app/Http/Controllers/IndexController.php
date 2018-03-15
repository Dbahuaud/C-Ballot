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
    public function Index(Request $request){
        if ($request->session()->has('user')) {
            $org = Organizations::where("id_user", Session::get('user')->id)->get();
            return view('index', ["org" => $org]);
        }
        else
           return view('index');
    }




    // Register form submitted
    public function RegSubmit(Request $request){
        return Users::AddUser($request);
    }
    // Register validation link
    public function ValidReg(Request $request, $unicode){
        $user = Users::where('unicode', $unicode)->get()[0];
        $user->valid = 1;
        $user->save();
        Session::put('user', $user);
        return view('index', ['message' => 'Merci pour votre inscription :) Signé, le DIGI']);
    }
    // Connection form submitted
    public function Connect(Request $request){
        return Users::ConnectUser($request);
    }
    // Disconnection button submitted
    public function Disconnect(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
    // Delete validation link
    public function DeleteUser(Requeste $request, $unicode) {
        $user = Users::where('unicode', $unicode)->get()[0];
        $user->delete();
        return redirect('/');
    }
    // Update user form submitted
    public function UpdateUser(Request $request){
        return Users::UpdateUser($request);
    }






    // Forgotten password first view
    public function Forgot() {
        return view('forgot');
    }
    // Submitted form with e-mail account forgot
    public function ForgotSubmit(Request $request) {
        return Users::ForgotUser($request);
    }
    // Change password form view
    public function ChangePassword(Request $request, $unicode) {
        $user = Users::where('unicode', $unicode)->get()[0];
        return view('changepass', ['user' => $user]);
    }
    // Submitted form with new password
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






    // Create Event form view
    public function AddEvent(Request $request) {
        $org = Organizations::where("id_user", Session::get('user')->id)->get();
        return view('create_event', ['org' => $org]);
    }
    // Create Event form submitted
    public function CreateEvent(Request $request) {
        return Events::AddEvents($request);
    }
    // Organization event's list page
    public function OrgEvent(Request $request, $org) {
        // Name decode from URL
        $realorg = urldecode($org);
        $org = Organizations::where('name', $realorg)->get()[0];
        $event = Events::where('unicode_owner', Organizations::where("name", $realorg)->get()[0]->unicode)->get();
        return view('list_event', ['event' => $event, 'org' => $org]);
    }
}
