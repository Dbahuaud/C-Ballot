<form action="{{action('IndexController@ParticipantUpdater')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$id}}">
    <i>Pour la mise à jour participants, séparer les différentes données par un '/'</i>
    <textarea name="participant" id="" cols="30" rows="10">
        @php
            $i = 0;
        @endphp
        @foreach($p as $participant)
            @php
                if ($i < count($p) - 1) {
            @endphp
            {{ $participant->email }} /
            @php
                }
                else {
                    @endphp
                        {{ $participant->email }}
                    @php
                }
                $i++;
            @endphp
        @endforeach
    </textarea>
    <button>Mettre à jour</button>
</form>