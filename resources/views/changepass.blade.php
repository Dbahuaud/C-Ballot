<form action="{{action('IndexController@ChangePass')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="unicode" value="{{$user->unicode}}">
    <label for="">Nouveau mot de passe</label>
    <input type="password" name="password">
    <label for="">Confirmation</label>
    <input type="password" name="passwordc">
    <button>Changer</button>
</form>