Bonjour {{$user->firstname . " " . $user->lastname}},
<a href="http://localhost:8000/user/changepassword/{{$user->unicode}}">Cliquez ici pour modifier votre mots de passe</a>