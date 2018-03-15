<!DOCTYPE html>
<html lang="en">
<head>
    <title>C-Ballot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>


<span class="container-fluid" >

    {{-- NAV --}}

    <nav class="navbar navbar-light bg-faded navbar-right" style="display: inline-block;" id="nav">

        <a class="navbar-brand" href="#">C-Ballot</a>

        <ul class="navbar-nav" style="display: inline-block;">
        <li  class="nav-item" style="display: inline-block;">

            <a class="nav-link nav-item" id="s" data-toggle="collapse" href="#searchBar" >
                <i class="fas fa-search"></i>
            </a>
            <span class="collapse " id="searchBar">
                <input data-target="#searchBar"type="text" name="search" placeholder="Search..">
            </span>
        </li>
            @if(Session::has("user"))
        <li class="nav-item" style="display: inline-block;">
           <a data-toggle="modal" href="#squarespaceModal"  class="nav-link nav-item"><strong>Je crée mon sondage</strong></a>
        </li>
@endif

        {{-- CREATE SONDAGE --}}


            <!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-title" id="lineModalLabel">Créer mon sondage</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form>
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="email" class="form-control" id="title" placeholder="Donnez un super titre !!">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" maxlength="500" class="form-control" id="description" placeholder="Tu sais plus pourquoi tu fais ton sondage ? C Ballot !"></textarea>
                </div>
                <div class="form-group" style="display: inline-block">
                    <label for="datetime_begin">Date de début</label>
                    <input class="form-control" type="datetime-local" id="datetime_begin">
                </div>
                <div class="form-group" style="display: inline-block">
                    <label for="datetime_end">Date de fin</label>
                    <input class="form-control" type="datetime-local" id="datetime_end">
                </div>
                <div>
              <button type="submit" class="btn btn-primary">Créer</button>
                    </div>
            </form>

		</div>
		<div class="modal-footer">
			<div class="btn-group" role="group">
                <button type="submit" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
            </div>
		</div>
	</div>

</div>

        {{-- FIN CREATE SONDAGE --}}

        {{-- SIGN UP --}}
        <li class="nav-item navbar-right">
        @if(!Session::has('user'))
        <a class="nav-link nav-item navbar-right" id="connect" href="#signup" data-toggle="modal" data-target=".bs-modal-sm"><i class="fas fa-user" style="margin-right: 10px"></i>Se connecter</a>

        @endif
        </li>
        </ul>


        {{-- MY ACCOUNT --}}
        @if(Session::has("user"))<a data-toggle="collapse" href="#modalASSO"><i class="fas fa-user" style="margin-right: 10px"></i><h6 style="display: inline-block;">Bienvenue, {{Session::get("user")->login}} !</h6></a>
        <li>
            <form action="{{action('IndexController@Disconnect')}}" method="post">
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger" id="btnDeco">Se déconnecter</button>
            </form>

        </li>
        @endif


        @if(isset($message))
            <script type="text/javascript">alert("{{$message}}");</script>
        @endif





    <!-- Modal SE CONNECTER/S'INSCRIRE -->
        @if(!Session::has('user'))

            <div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">

                                <ul id="myTab" class="nav nav-tabs-alt nav-justified">
                                    <li class="active"><a href="#signin" data-toggle="tab" class="modalTitle"><h5>S'inscrire</h5></a></li>
                                    <li><a href="#signup" data-toggle="tab" id="regButton" class="modalTitle"><h5>S'enregistrer</h5></a></li>
                                </ul>

                        </div>
                        <div class="modal-body">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade-in active " id="signin">
                                    <div class="form-horizontal">
                                        <fieldset>
                                            <!-- Sign In Form -->
                                            <!-- Text input-->
                                            <form action="{{action("IndexController@Connect")}}" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="">Login/Email</label>
                                                    <input class="form-control" type="text" name="account">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input class="form-control" type="password" name="password">

                                                </div>
                                                <button type="submit" class="btn btn-primary">Se connecter</button>
                                                <a href="/forgot/" id="mdpLost"><i>Mot de passe oublié</i></a>
                                            </form>


                                        </fieldset>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="signup">
                                    <div class="form-horizontal">
                                        <fieldset>
                                            <!-- Sign Up Form -->
                                            <!-- Text input-->
                                            <form action="{{action("IndexController@RegSubmit")}}" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="">Login</label>
                                                    <input type="text" class="form-control" name="login">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Confirmation</label>
                                                    <input type="password" class="form-control" name="confirmation">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control" name="email"><br>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Firstname</label>
                                                    <input type="text" class="form-control" name="firstname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Lastname</label>
                                                    <input type="text" class="form-control" name="lastname">
                                                </div>
                                                <button class="btn btn-primary" type="submit">S'inscrire</button>
                                            </form>



                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    @endif

        <!-- FIN Modal SE CONNECTER/S'INSCRIRE -->





        <!-- Modal ASSO -->

<div id="modalASSO" class="collapse">

        <div class="modalAsso modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tes sondages</h4>
            </div>

            @if(isset($events))
                @foreach($events as $e)
                    <div class="modal-body">
                            <a href="" style="text-decoration: none;">
                                <div class="col-5" style="width: 100%; height: 100%; background-color: white; text-align: right; display: inline-block">
                                    <h5>{{$e->title}}</h5>
                                </div>
                                <button class="btn btn-primary btn boutton" style="display: inline-block" >Modifier</button>
                                <button class="btn btn-danger btn boutton" style="display: inline-block" >Supprimer</button>
                            </a>
                        </div>
                @endforeach
            @endif


            <div class="modal-header">
                <h4 class="modal-title">Tes associations</h4>
            </div>

                @if(isset($org))
                    @foreach($org as $o)
                    <a href="" style="text-decoration: none;">
                        <div class="modal-body col-5" style="width: 100%; height: 100%; background-color: white; text-align: right; display: inline-block">
                            <h5>{{$o->name}}</h5>
                        </div>
                        <button class="btn btn-primary btn boutton" style="display: inline-block" >Modifier</button>
                        <button class="btn btn-danger btn boutton" style="display: inline-block" >Supprimer</button>
                        </a>
                    @endforeach
                @endif

            <div class="modal-content">
                <a href="#createAsso" data-toggle="collapse" style="text-decoration: none;">
                    <strong id="plus" style="position: relative; margin-left: 50%;">+</strong></a>
            </div>

            <!-- Modal CREATE ASSO -->
            <div id="createAsso" class="collapse">
                <div class="modal-body">
                    	<form>
					<div class="form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Nom de l'association</label>
					    	<input type="text" class="form-control" id="" placeholder=" Entres le nom !!">
				  		</div>
			  		<div class="">
			  			<div class="form-group">
			  				<label for ="description"> Numéro de SIRET</label>
			  			 	<input  class="form-control" id="description" type="number" placeholder="Entres le Siret !!"></input>
			  			</div>
			  			<div>
			  				<button type="button" class="btn btn-primary submit" data-toggle="collapse" href="#createAsso"><i aria-hidden="true"></i>Créer l'association</button>
			  			</div>

					</div>
				</form>





                </div>
            </div>

        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-toggle="collapse" href="#modalASSO" data-dismiss="modal">Close</button>
            </div>
        </div>

        <!-- FIN Modal ASSO -->












    </nav>
</div>