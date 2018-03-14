<form action="{{action('IndexController@CreateEvent')}}" method="post">
    {{csrf_field()}}
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <label for="begin">Date de depart</label>
    <input type="date" name="begin_d"><input type="time" name="begin_t">
    <label for="end">Date de fin</label>
    <input type="date" name="end_d"><input type="time" name="end_t">
    <label for="org">Pour :</label>
    <select name="organization" id="org">
        @if (Session::has('user'))
            @foreach($org as $o)
                <option value="{{$o->id}}">{{$o->name}}</option>
            @endforeach
        @endif
    </select>
    <i>Pour l'ajout de réponse et de participants, séparer les différentes données par un '/'</i>
    <textarea name="answer" cols="30" rows="10" placeholder="Réponse 1 ? / Réponse 2 ? / Réponse 3 ? / ..."></textarea>
    <textarea name="participant" cols="30" rows="10" placeholder="jean@dupont.fr/marcel@henri.fr/jean@blague.hein/..."></textarea>
    <button>Créer</button>
</form>