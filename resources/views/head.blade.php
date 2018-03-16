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



    <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="display: inline-block;" id="nav">

        <a class="navbar-brand" href="#">C-Ballot</a>


            <ul class="navbar-nav" style="display: inline-block;">




                {{--<!-- SONDAGE MODAL -->--}}
                {{--<li class="nav-item" id="CreateSub">--}}
                {{--<!-- Button to Open the Modal -->--}}
                {{--<a class="nav-link" data-toggle="modal" data-target="#CreateModal" href="#">Créez votre sondage</a>--}}

                {{--<!-- The Modal -->--}}
                {{--<div class="modal fade" id="CreateModal">--}}
                {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content">--}}

                {{--<!-- Modal Header -->--}}
                {{--<div class="modal-header">--}}
                {{--<h4 class="nav-link">Je crée mon sondage</h4>--}}
                {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                {{--</div>--}}

                {{--<!-- Modal body -->--}}
                {{--<div class="modal-body">--}}

                {{--<form>--}}

                {{--<!-- Titre -->--}}
                {{--<div class="form-group">--}}
                {{--<label >Le nom de mon sondage</label>--}}
                {{--<input maxlength="75" type="text" class="form-control"  placeholder="Entrez le titre de votre sondage">--}}
                {{--</div>--}}

                {{--<!-- DEBUT SONDAGE -->--}}
                {{--<div class="form-group">--}}
                {{--<label>Début du sondage</label>--}}
                {{--<div>--}}
                {{--<input name="" type="date" placeholder="DD/MM/YYYY" class="form-control">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<!-- FIN SONDAGE -->--}}
                {{--<div class="form-group">--}}
                {{--<label>Fin du sondage</label>--}}
                {{--<div>--}}
                {{--<input name="" type="date" placeholder="DD/MM/YYYY" class="form-control">--}}
                {{--</div>--}}

                {{--</div>--}}

                {{--<!-- DESCRIPTION -->--}}
                {{--<div class="form-group">--}}
                {{--<label>Description</label>--}}
                {{--<div>--}}
                {{--<textarea maxlength="500" class="form-control description" id="description" name="Description" placeholder="Entrez la description de votre sondage"></textarea>--}}
                {{--</div>--}}
                {{--</div>--}}


                {{--<button type="submit" class="btn btn-primary">Créer</button>--}}
                {{--</form>--}}
                {{--</div>--}}

                {{--<!-- Modal footer -->--}}
                {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</li>--}}
                {{--<!-- END MODAL -->--}}




            @if(!Session::has('user'))

                <!-- S'INSCRIRE MODAL -->
                    <li style="display: inline-block;" class="nav-item">
                    <!-- Button to Open the Modal -->
                    <a style="display: inline-block;" class="nav-link" data-toggle="modal" data-target="#SubModal" href="#">Se connecter</a>

                        <!-- The Modal -->
                    <div class="modal fade" id="SubModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="nav-link">Se connecter</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    {{--<form>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputEmail1">Votre adresse mail</label>--}}
                                    {{--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse Email ou votre pseudo">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputPassword1">Votre mot de passe</label>--}}
                                    {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">--}}
                                    {{--</div>--}}



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
                                            <button type="submit" class="btn btn-primary">Se connecter</button><a href="/forgot/"><i>Mots de passe oublié</i></a>
                                        {{--<a href="#">Mot de passe oublié ?</a>--}}
                                        </form>
                                    {{--</form>--}}





                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </li>
                    <!-- END MODAL -->










                    <!-- S'INSCRIRE MODAL -->
                    <li style="display: inline-block;" class="nav-item">
                <!-- Button to Open the Modal -->
                <a class="nav-link" data-toggle="modal" data-target="#ConnectModal" href="#">S'inscrire</a>

                        <!-- The Modal -->
                <div class="modal fade" id="ConnectModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="nav-link">S'inscrire</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

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

                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>

                        </div>
                    </div>
                </div>

            </li>
            @endif
            <!-- END MODAL -->

    @if(Session::has("user"))
            <li>
                <h4 style="display: inline-block;">Bienvenue, {{Session::get("user")->login}} ! </h4>
            </li>
            <li>
                <a href="#modalASSO" data-toggle="collapse">
                    <h4 style="display: inline-block;"> <i class="fas fa-bars"></i> <i class="fas fa-angle-down"></i> </h4>
                </a>
            </li>
            <li>
                <form action="{{action('IndexController@Disconnect')}}" method="post">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Se déconnecter</button>
                </form>
            </li>
            <li>
                <form action="{{action('IndexController@DeleteUser')}}" method="post">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger"><i class="fas fa-exclamation-triangle"></i> Supprimer son compte</button>
                </form>
            </li>

        <div id="modalASSO" class="collapse">

            <div class="modalAsso modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tes sondages</h4>
                </div>
                @php
                    $org = \App\Organizations::where('id_user', Session::get('user')->id)->get();
                    foreach($org as $o) {
                        $event = \App\Events::where('unicode_owner', $o->unicode)->orderBy('active');
                        foreach($event as $e) {
                        @endphp
                            <div class="modal-body">
                                    <div class="col-12" style="width: 100%; height: 100%; background-color: white; text-align: right; display: inline-block">
                                        @if($e->active == 0)
                                            <h5 style="display: flex; justify-content: space-around">{{$e->title}} / Terminée</h5>
                                            <p>Résultat :</p>
                                            @php
                                                $answer = \App\Answers::where('id_event', $e->id)->get();
                                                $result_all = array();
                                                $nb_max = 0;
                                                foreach($answer as $a) {
                                                    $nb_vote = \App\Votes::where('id_answer', $a->id)->count();
                                                    $result_line = array();
                                                    $nb_max += $nb_vote;
                                                    array_push($result_line, $a->answer, $nb_vote);
                                                    array_push($result_all, $result_line);
                                                    $i = 0;
                                                    $tmp = array();
                                                    while ($i < count($result_all) - 1) {
                                                        if ($result_all[$i][1] < $result_all[$i + 1][1]) {
                                                            $tmp = $result_all[$i];
                                                            $result_all[$i] = $result_all[$i + 1];
                                                            $result_all[$i + 1] = $tmp;
                                                        }
                                                        $i++;
                                                    }
                                                }
                                            $i = 0;
                                            while ($i < count($result_all)) {
                                                if ($nb_max == 0)
                                                    echo "<p>>" . $result_all[$i][0] . "< Vote : 0 (~0%)</p>";
                                                else
                                                    echo "<p>>" . $result_all[$i][0] . "< Vote : " . $result_all[$i][1] . " (~". round((($result_all[$i][1] / $nb_max) * 100), 2) . "%)</p>";
                                                $i++;
                                            }
                                            echo "<p> Nombre de vote total : " . $nb_max . "</p>";
                                            @endphp
                                        @else
                                            <h5 style="display: flex; justify-content: space-around">
                                                <span style="width: 150px; overflow: hidden; text-align: left;">{{$e->title}}</span>
                                                @if($e->active == 1)
                                                    <form action="{{action('IndexController@SendInvitationVote')}}" method="post" style="width: 100px;">{{csrf_field()}}<input type="hidden" name="id" value="{{$e->id}}"><button class="btn btn-primary btn" style="width:100px;">Inviter <i class="far fa-envelope"></i></button></form>
                                                    <form action="{{action('IndexController@CloseEvent')}}" method="post">{{csrf_field()}}<input type="hidden" name="id" value="{{$e->id}}"><button class="btn btn-danger btn" style="width:100px;">Cloturer <i class="fas fa-times"></i></button></form>
                                                    <a href="#AddPart{{$e->id}}" data-toggle="collapse" style="display: inline-block; width: 50px; height: 50px; font-size: 30px;"><i class="far fa-edit"></i></a>
                                                @endif
                                            </h5>
                                            <p>{{$e->datetime_begin}}</p>
                                            @if($e->active == 1)
                                            <p>{{$e->datetime_end}}</p>
                                            @endif
                                            <div class="collapse" id="AddPart{{$e->id}}">
                                                <form action="{{action('IndexController@ParticipantUpdater')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="id" value="{{$e->id}}">
                                                    <i>Pour la mise à jour participants,<br>séparer les différentes données par un '/'</i>
                                                    <textarea name="participant" id="" cols="30" rows="10" style="width: 100%">
                                                        @php
                                                            $i = 0;
                                                            $p = \App\Participants::where('id_event', $e->id)->get();
                                                        @endphp
                                                        @foreach($p as $participant)
                                                            @php
                                                                if ($i < count($p) - 1) {
                                                            @endphp
                                                            {{ $participant->email }} /
                                                            @php
                                                                }
                                                                else {
                                                            @endphp
                                                            {{ $participant->email }}
                                                            @php
                                                                }
                                                                $i++;
                                                            @endphp
                                                        @endforeach
                                                    </textarea>
                                                    <button class="btn btn-primary btn" >Mettre à jour</button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                            </div>
                        @php
                    }
                }
                @endphp
                @if(\App\Organizations::where('id_user', Session::get('user')->id)->count() != 0)
                     <a href="#createCampaign" data-toggle="collapse" style="text-decoration: none;">
                        <strong id="plus" style="position: relative; margin-left: 50%;">+</strong>
                     </a>
                    <div id="createCampaign" class="collapse">
                            <form action="{{action('IndexController@CreateEvent')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">Titre</label>
                                    <input type="text" name="title" class="form-control col-10 offset-1" id="title" placeholder="Donnez un super titre !!">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" cols="30" rows="10"  class="form-control col-10 offset-1" id="description" placeholder="Tu sais plus pourquoi tu fais ton sondage ?     C Ballot !"></textarea>
                                </div>
                                <div class="form-group col-10 offset-1" >
                                    <label for="begin">Date de depart</label>
                                    <p><input type="date" name="begin_d"><input type="time" name="begin_t" value="09:00:00"></p>
                                </div>
                                <div class="form-group col-10 offset-1" >
                                    <label for="datetime_end" style="display: inline-block">Date de fin</label>
                                    <p>
                                        <input type="date" name="end_d"><input type="time" name="end_t" value="10:00:00">
                                    </p>
                                </div>
                                <div class="form-group col-10 offset-1">
                                    <label for="org">Pour l'organisation :</label>
                                    <select name="organization" id="org">
                                        @php
                                            $org = \App\Organizations::where('id_user', Session::get('user')->id)->get();
                                        @endphp
                                        @foreach($org as $o)
                                            <option value="{{$o->id}}">{{$o->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-10 offset-1">
                                    <label>Réponses possible (séparées par un '/')</label>
                                    <textarea name="answer" cols="30" rows="10" class="form-control col-10 offset-1"  placeholder="Réponse 1 ? / Réponse 2 ? / Réponse 3 ? / ..."></textarea>
                                </div>
                                <div class="form-group col-10 offset-1">
                                    <label>Participants (séparées par un '/')</label>
                                    <textarea name="participant" cols="30" rows="10" class="form-control col-10 offset-1" placeholder="jean@dupont.fr/marcel@henri.fr/jean@blague.hein/..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary">Créer</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                @else
                    <p style="text-align: center">Veuillez créer une organisation pour pouvoir créer une campagne</p>
                @endif

                <div class="modal-header">
                    <h4 class="modal-title">Tes associations</h4>
                </div>

                <div class="modal-content">
                @if(isset($org))
                    @foreach($org as $o)
                            <div class="modal-body col-12" style=" background-color: white; text-align: right; display: inline-flex; justify-content: space-between">
                                {{$o->name}}
                                <div style="display: flex; width: 50%; justify-content: space-around">
                                    <a href="#editASSO" data-toggle="collapse" class="col-3 btn btn-primary btn boutton" style="width:100%; margin: 0;min-width: 100px">Modifier</a>
                                    <a href="/org/delete/{{urlencode($o->name)}}" class="col-3 btn btn-danger btn boutton" style="width:100%; margin:0; min-width: 100px">Supprimer</a>
                                </div>
                            </div>
                            <div class="collapse" id="editASSO" style="padding: 0 25px ;">
                                <form action="{{action("IndexController@OrganizationUpdate")}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name='id' value="{{$o->id}}">
                                    <p style="height: 40px; line-height: 30px">
                                        <label for="" style="float: left;">Nom</label><input type="text" name="name" value="{{$o->name}}" style="float: right;">
                                    </p>
                                    <p style="height: 40px; line-height: 30px">
                                        <label for="" style="float: left;">Siret</label><input type="text" name="siret" value="{{$o->siret}}" style="float: right;">
                                    </p>
                                    <button class="btn btn-primary btn boutton" style="float:right;">Appliquer !</button>
                                </form>
                            </div>
                    @endforeach
                @endif
                    <a href="#createAsso" data-toggle="collapse" style="text-decoration: none;">
                        <strong id="plus" style="position: relative; margin-left: 50%;">+</strong></a>
                </div>

                <!-- Modal CREATE ASSO -->
                <div id="createAsso" class="collapse">
                    <div class="modal-body">
                        <form action="{{action("IndexController@FormSubmitOrg")}}" method="post">
                            {{csrf_field()}}
                            <div class="form-line">
                                <div class="form-group">
                                    <label for="exampleInputUsername">Nom de l'association</label>
                                    <input type="text" class="form-control" name="name" class="form-control" id="" placeholder=" Entres le nom !!">
                                </div>
                                <div class="">
                                    <div class="form-group">
                                        <label for ="description"> Numéro de SIRET</label>
                                        <input type="text" class="form-control" id="description" name="siret" maxlength="9" minlength="9">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary submit">Créer l'association</button>
                                    </div>

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
        @endif

        @if(!empty($message))
            <script type="text/javascript">alert("{{$message}}");</script>
        @endif
            </ul>


    </nav>