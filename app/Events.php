<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Events extends Model
{
    public $table = 'event';

    public static function AddEvents (Request $request) {
        $inputs = $request->all();
        $nEvent = new Events();
        $answer = explode('/', $inputs['answer']);
        $participant = explode('/', $inputs['participant']);
        $answer = array_filter($answer);
        $participant = array_filter($participant);
        if (!empty($inputs['title']) && !empty($inputs['description']) && !empty($inputs['begin_t'])
            && !empty($inputs['begin_d']) && !empty($inputs['end_t'])&& !empty($inputs['end_d'])
            && count($participant) > 2 && count($answer) > 1) {
            $begin = $inputs['begin_d'] . " " . $inputs['begin_t'];
            $end = $inputs['end_d'] . " " . $inputs['end_t'];
            $nEvent->title = $inputs['title'];
            $nEvent->description = $inputs['description'];
            $nEvent->datetime_begin = $begin;
            $nEvent->datetime_end = $end;
            $nEvent->unicode_owner = Organizations::where('id', $inputs['organization'])->get()[0]->unicode;
            $nEvent->active = 1;
            $nEvent->nb_answer = 1;
            $nEvent->save();
            $i = 0;
            while ($i < count($answer)) {
                $nAnswer = new Answers();
                $mail = str_replace("\r", "", $answer[$i]);
                $mail = str_replace('\n', "", $mail);
                $mail = str_replace(" ", "", $mail);
                $nAnswer->answer = $mail;
                $nAnswer->id_event = $nEvent->id;
                $nAnswer->save();
                $i++;
            }
            $i = 0;
            while ($i < count($participant)) {
                $nPart = new Participants();
                $nPart->email = str_replace(" ", "", $participant[$i]);
                $nPart->unicode = Users::Unicode(15);
                $nPart->throwed = 0;
                $nPart->id_event = $nEvent->id;
                $nPart->vote = 0;
                $nPart->save();
                $i++;
            }
            return redirect()->route('index', ['message' => 'Campagne Créer !']);
        }
        return redirect()->route('index', ['Error' => 'Erreur']);
    }

    public static function UpdateEvent(Request $request) {
        $inputs = $request->all();
        Participants::where('id_event', $inputs['id'])->delete();
        $participant = explode('/', $inputs['participant']);
        $i = 0;
        while ($i < count($participant)) {
            $nPart = new Participants();
            $nPart->email = str_replace(" ", "", $participant[$i]);
            $nPart->email = str_replace("\n", "", $participant[$i]);
            $nPart->email = str_replace("\r", "", $participant[$i]);
            $nPart->unicode = Users::Unicode(15);
            $nPart->throwed = 0;
            $nPart->id_event = $inputs['id'];
            $nPart->vote = 0;
            $nPart->save();
            $i++;
        }
        return redirect()->route('index', ['message' => 'Campagne mise à jour !']);
    }
}
