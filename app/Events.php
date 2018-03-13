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
        if (!empty($inputs['title']) && !empty($inputs['description']) && !empty($inputs['begin']) && !empty($inputs['end'])) {
            $dbegin = explode( 'T', $inputs['begin']);
            $dend = explode( 'T', $inputs['end']);
            $begin = $dbegin[0] . " " . $dbegin[1] . ":00";
            $end = $dend[0] . " " . $dend[1] . ":00";
            $nEvent->title = $inputs['title'];
            $nEvent->description = $inputs['description'];
            $nEvent->datetime_begin = $begin;
            $nEvent->datetime_end = $end;
            $nEvent->unicode_owner = Organizations::where('id', $inputs['organization'])->get()[0]->unicode;
            $nEvent->active = 1;
            $nEvent->nb_answer = 1;
            $nEvent->save();
            return redirect()->route('index', ['message' => 'Campagne Créer !']);
        }
        return redirect()->route('index', ['Error' => 'Erreur']);
    }
}
