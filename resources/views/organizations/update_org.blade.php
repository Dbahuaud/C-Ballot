<form action="{{action("IndexController@OrganizationUpdate")}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name='id' value="{{$org->id}}">
    <label for="">Nom</label><input type="text" name="name" value="{{$org->name}}">
    <label for="">Siret</label><input type="text" name="siret" value="{{$org->siret}}">
    <button>MAJ</button>
</form>