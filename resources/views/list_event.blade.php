<b>
    {{$org->name}}
    {{$org->siret}}
</b>
@foreach($event as $e)
    <p>{{$e->title}}</p>
    <p>{{$e->description}}</p>
    <p>Begin : {{$e->datetime_begin . "  End :" . $e->datetime_end}}</p>
    <p>Active : {{$e->active}}</p>
    <br>
    <br>
@endforeach