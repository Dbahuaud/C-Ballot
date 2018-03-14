<b>
    {{$org->name}}
    {{$org->siret}}
</b>
@foreach($event as $e)
    <p>{{$e->title}}</p>
    <p>{{$e->description}}</p>
    <p>Begin : {{$e->datetime_begin . "  End :" . $e->datetime_end}}</p>
    @if($e->active == 1)
        <p>En cours</p>
        <form action="{{action('IndexController@SendInvitationVote')}}" method="post">{{csrf_field()}}<input type="hidden" name="id" value="{{$e->id}}"><button>Envoyer les invitations</button></form>
        <form action="{{action('IndexController@CloseEvent')}}" method="post">{{csrf_field()}}<input type="hidden" name="id" value="{{$e->id}}"><button>Cloturer la campagne</button></form>
    @else
        <p>Terminée</p>
        <p>Résultat</p>
        @php
            $answer = \App\Answers::where('id_event', $e->id)->get();
            $result_all = array();
            $nb_max = 0;
            foreach($answer as $a) {
                $nb_vote = \App\Votes::where('id_answer', $a->id)->count();
                $result_line = array();
                $nb_max += $nb_vote;
                array_push($result_line, $a->answer, $nb_vote);
                array_push($result_all, $result_line);
                $i = 0;
                $tmp = array();
                while ($i < count($result_all) - 1) {
                    if ($result_all[$i][1] < $result_all[$i + 1][1]) {
                        $tmp = $result_all[$i];
                        $result_all[$i] = $result_all[$i + 1];
                        $result_all[$i + 1] = $tmp;
                    }
                    $i++;
                }
            }
        $i = 0;
        while ($i < count($result_all)) {
            if ($nb_max == 0)
                echo "<p>" . $result_all[$i][0] . " Vote : 0 (~0%)</p>";
            else
                echo "<p>" . $result_all[$i][0] . " Vote : " . $result_all[$i][1] . " (~". round((($result_all[$i][1] / $nb_max) * 100), 2) . "%)</p>";
            $i++;
        }
        echo "<p> Nombre de vote total : " . $nb_max . "</p>";
        @endphp
    @endif
    <br>
    <br>
@endforeach