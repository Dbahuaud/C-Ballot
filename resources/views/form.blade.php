@if(!\Illuminate\Support\Facades\Session::has('user'))
<form action="{{action("IndexController@FormSubmit")}}" method="post">
    {{csrf_field()}}
    <label for="">Login</label>
    <input type="text" name="login"><br>

    <label for="">Password</label>
    <input type="text" name="password"><br>

    <label for="">Confirmation</label>
    <input type="text" name="confirmation"><br>

    <label for="">Email</label>
    <input type="email" name="email"><br>

    <label for="">Firstname</label>
    <input type="text" name="firstname"><br>

    <label for="">Lastname</label>
    <input type="text" name="lastname"><br>

    <button type="submit">S'inscrire</button>
</form>


<form action="{{action("IndexController@Connect")}}" method="post">
    {{csrf_field()}}
    <label for="">Login/Email</label>
    <input type="text" name="account">

    <label for="">Password</label>
    <input type="text" name="password">

    <button type="submit">Se Connecter</button>
</form>
    @else
    <form action="{{action('IndexController@Disconnect')}}" method="post">
        {{csrf_field()}}
    <button type="submit">Se Deconnecter</button>
    </form>

    <form action="{{action('IndexController@UpdateUser')}}" method="post">
        {{csrf_field()}}

        <label for="">Login</label>
        <input type="text" name="login" value="{{\Illuminate\Support\Facades\Session::get('user')['login']}}" disabled>

        <label for="">Password</label>
        <input type="password" name="password" value="nochange">

        <label for="">Confirmation</label>
        <input type="password" name="confirmation" value="nochange">

        <label for="">Email</label>
        <input type="email" name="email" value="{{\Illuminate\Support\Facades\Session::get('user')['email']}}">

        <label for="">Fullname</label>
        <input type="text" name="fullname" value="{{\Illuminate\Support\Facades\Session::get('user')['firstname']}}
                {{\Illuminate\Support\Facades\Session::get('user')['lastname']}}"disabled>

        <button type="submit">Modifier son Profil</button>
    </form>
@endif