<?php

namespace App\Http\Controllers;

use App\Answers;
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
        return redirect('/');
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
    // Delete throw mail
    public function DeleteUser(Request $request) {
        return Users::DeleteUser($request);
    }
    // Delete user valid link
    public function DeleteUserValid(Request $request, $unicode) {
        return Users::Deleter($request, $unicode);
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
        return view('events.create_event', ['org' => $org]);
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
        return view('events.list_event', ['event' => $event, 'org' => $org]);
    }
    // Send Invitation Link
    public function SendInvitationVote(Request $request) {
        $input = $request->all();
        $id_event = $input['id'];
        $event = Events::where('id', $id_event)->get()[0];
        $org = Organizations::where('unicode', $event->unicode_owner)->get()[0];
        $participant = Participants::where('id_event', $id_event)->get();
        foreach ($participant as $p) {
            Mail::send("mail.participant", ['org' => $org, 'event' => $event, 'p' => $p], function ($message) use($p){
                $message->to($p->email, "Bonjour Bondour")->subject("Viens exprimer ta voie !");
            });
            $p->throwed = 1;
            $p->save();
            echo "OK";
        }
        return redirect('/');
    }
    // Vote interface
    public function Vote(Request $request, $id, $unicode) {
        if (Participants::where('unicode', $unicode)->count() == 0)
            return redirect('/');
        $p = Participants::where('unicode', $unicode)->get()[0];
        if ($p->vote == 1)
            return redirect('/');
        if ($p->id_event != $id)
            return redirect('/');
        $event = Events::where('id', $id)->get()[0];
        if ($event->active == 0)
            return redirect('/');
        $answer = Answers::where('id_event', $id)->get();
        return view("events.vote", ['e' => $event, 'a' => $answer, 'p' => $p]);
    }
    // Vote Submit
    public function VoteSend(Request $request) {
        $inputs = $request->all();
        $participant = Participants::where('unicode', $inputs['participant'])->get()[0];
        $participant->vote = 1;
        $participant->save();
        $nVote = new Votes();
        $nVote->id_answer = $inputs['answer'];
        $nVote->datetime_vote = date('Y-m-d H:i:s');
        $nVote->save();
        return redirect('/');
    }
    // Close Event
    public function CloseEvent(Request $request) {
        $input = $request->all();
        $event = Events::where('id', $input['id'])->get()[0];
        $event->active = 0;
        $event->save();
        return redirect('/');
    }
    // Update participant form
    public function UpdateParticipant(Request $request, $id) {
        $p = Participants::where('id_event', $id)->get();
        return view("events.update_part", ['id' => $id, 'p' => $p]);
    }
    // Update participant submitted
    public function ParticipantUpdater(Request $request) {
        return Events::UpdateEvent($request);
    }

    // ORGANIZATIONS
    // Create Organizations
    public function FormSubmitOrg(Request $request){
        return Organizations::AddOrg($request);
    }
    // List organizations owned by user
    public function OrgList(Request $request) {
        $id_user = $request->session()->get('user')->id;
        $org = Organizations::where('id_user', $id_user)->get();
        return view("organizations.list_org", ["org" => $org]);
    }
    // Update Organizations by $name
    public function UpdateOrg(Request $request, $name) {
        $org = Organizations::where('name', urldecode($name))->get()[0];
        if ($org->id_user != $request->session()->get('user')->id)
            return view('index', ['message' => "Vous n'avez pas les droits requis pour accéder à cette page"]);
        return view('organizations.update_org', ['org' => $org]);
    }
    // Create organization form
    public function OrganizationCreate() {
        return view('organizations.create_org');
    }

    // Update organization submitted
    public function OrganizationUpdate(Request $request) {

        return Organizations::UpdateOrg($request);
    }
    // Begin delettion org
    public function DeleteOrg(Request $request, $name) {
        return Organizations::Deleter($request, $name);
    }
    // End deletion org
    public function DeleterOrgValid(Request $request, $unicode) {
        return Organizations::DeleterValid($request, $unicode);
    }

    // Protector
    public function NoFormRedirect() {
        return redirect()->route('index');
    }
}
