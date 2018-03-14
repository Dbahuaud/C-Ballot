<p>{{$e->title}}</p>
<p>{{$e->description}}</p>
<form action="{{action('IndexController@VoteSend')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="participant" value="{{$p->unicode}}">
    @foreach($a as $answer)
        <p>{{$answer->answer}} <input type="radio" name="answer" value="{{$answer->id}}"></p>
    @endforeach
    <button>Voter !</button>
</form>
