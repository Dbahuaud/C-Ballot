<form action="{{action("IndexController@FormSubmitOrg")}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="">Nom de l'Organisation</label>
        <input type="text" class="form-control" name="name" class="form-control" id="" placeholder=" Entres le nom !!">
    </div>
    <div class="form-group">
        <label for="">Numéro de Siret</label>
        <input type="text" class="form-control" name="siret" maxlength="9">
    </div>
    <button type="submit" class="btn btn-primary">S'enregistrer</button>
</form>