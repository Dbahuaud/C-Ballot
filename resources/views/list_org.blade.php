@foreach($org as $o)
    {{$o->name}} {{$o->siret}} <a href="/org/update/{{urlencode($o->name)}}">MAJ</a><a href="/org/delete/{{urlencode($o->name)}}">X</a>
@endforeach