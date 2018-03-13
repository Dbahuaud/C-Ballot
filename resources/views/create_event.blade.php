<form action="{{action('IndexController@CreateEvent')}}" method="post">
    {{csrf_field()}}
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <label for="begin">Date de depart</label>
    <input type="datetime-local" name="begin" id="begin">
    <label for="end">Date de fin</label>
    <input type="datetime-local" name="end" id="end">
    <label for="org">Pour :</label>
    <select name="organization" id="org">
        @if (Session::has('user'))
            @foreach($org as $o)
                <option value="{{$o->id}}">{{$o->name}}</option>
            @endforeach
        @endif
    </select>
    <button>Créer</button>
</form>