<form action="{{action('IndexController@ForgotSubmit')}}" method="post">
    {{csrf_field()}}
    <label for="email">E-mail du compte :</label>
    <input type="email" name="email">
    <button>Envoyer le mail</button>
</form>
<i>Un mail vous sera envoyé pour réinitialiser votre mots de passe</i>