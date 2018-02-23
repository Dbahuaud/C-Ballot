<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bambouseraie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>

@include('style')


<div class="container-fluid" >


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











                <li style="display: inline-block;" class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>






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
                                            <button type="submit" class="btn btn-primary">Se connecter</button>
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

                                <form action="{{action("IndexController@FormSubmit")}}" method="post">
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

            </ul>
        @if(Session::has("user"))<h4 style="display: inline-block;">Bienvenue, {{Session::get("user")->login}} !</h4>
<li>
            <form action="{{action('IndexController@Disconnect')}}" method="post">
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger">Se déconnecter</button>
            </form>

</li>
        @endif

@if(isset($message))
            <script type="text/javascript">alert("{{$message}}");</script>
    @endif


    </nav>

















    <!-- CAROUSEL -->

        <div id="carousel">
            <div class="row">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Dot Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Items -->
                    <div class="carousel-inner" style="height: 75vh;">
                        <div class="active carousel-item">  <img src="https://i.imgur.com/eWtfMME.png" class="img-responsive"></div>
                        <div class="carousel-item">  <img src="https://images7.alphacoders.com/411/411820.jpg" class="img-responsive"></div>
                        <div class="carousel-item">  <img src="https://static.pexels.com/photos/36487/above-adventure-aerial-air.jpg" class="img-responsive"></div>
                    </div>

                </div>
            </div>
        </div>


</body>
</html>