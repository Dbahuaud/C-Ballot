<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bambouseraie</title>
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



<div class="container-fluid" >


    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">




                <!-- S'INSCRIRE MODAL -->
                <li class="nav-item" id="CreateSub">
                    <!-- Button to Open the Modal -->
                    <a class="nav-link" data-toggle="modal" data-target="#CreateModal" href="#">Créez votre sondage</a>

                    <!-- The Modal -->
                    <div class="modal fade" id="CreateModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="nav-link">Je crée mon sondage</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <form>

                                        <!-- Titre -->
                                        <div class="form-group">
                                            <label >Le nom de mon sondage</label>
                                            <input maxlength="75" type="text" class="form-control"  placeholder="Entrez le titre de votre sondage">
                                        </div>

                                        <!-- DEBUT SONDAGE -->
                                        <div class="form-group">
                                            <label>Début du sondage</label>
                                            <div>
                                                <input name="" type="date" placeholder="DD/MM/YYYY" class="form-control">
                                            </div>
                                        </div>

                                        <!-- FIN SONDAGE -->
                                        <div class="form-group">
                                            <label>Fin du sondage</label>
                                            <div>
                                                <input name="" type="date" placeholder="DD/MM/YYYY" class="form-control">
                                            </div>

                                        </div>

                                        <!-- DESCRIPTION -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div>
                                                <textarea maxlength="500" class="form-control description" id="description" name="Description" placeholder="Entrez la description de votre sondage"></textarea>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Créer</button>
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
                <!-- END MODAL -->











                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>








                <!-- S'INSCRIRE MODAL -->
                <li class="nav-item">
                    <!-- Button to Open the Modal -->
                    <a class="nav-link" data-toggle="modal" data-target="#SubModal" href="#">S'inscrire</a>

                    <!-- The Modal -->
                    <div class="modal fade" id="SubModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="nav-link">S'inscrire</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Votre adresse mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse Email ou votre pseudo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Votre mot de passe</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Se connecter</button>

                                        <a href="#">Mot de passe oublié ?</a>
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
                <!-- END MODAL -->

            </ul>
        </div>
    </nav>






















        {{--<nav class="navbar navbar-light bg-faded">--}}

                {{--<ul class="navbar-nav">--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link navbar-brand" href="#">C Ballot</a>--}}
                        {{--</li>--}}




                        {{--<!-- S'INSCRIRE MODAL -->--}}
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











                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#"><i class="fas fa-search"></i></a>--}}
                        {{--</li>--}}








                        {{--<!-- S'INSCRIRE MODAL -->--}}
                        {{--<li class="nav-item">--}}
                            {{--<!-- Button to Open the Modal -->--}}
                            {{--<a class="nav-link" data-toggle="modal" data-target="#SubModal" href="#">S'inscrire</a>--}}

                            {{--<!-- The Modal -->--}}
                            {{--<div class="modal fade" id="SubModal">--}}
                                {{--<div class="modal-dialog">--}}
                                    {{--<div class="modal-content">--}}

                                        {{--<!-- Modal Header -->--}}
                                        {{--<div class="modal-header">--}}
                                            {{--<h4 class="nav-link">S'inscrire</h4>--}}
                                            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                                        {{--</div>--}}

                                        {{--<!-- Modal body -->--}}
                                        {{--<div class="modal-body">--}}

                                            {{--<form>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label for="exampleInputEmail1">Votre adresse mail</label>--}}
                                                    {{--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse Email ou votre pseudo">--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label for="exampleInputPassword1">Votre mot de passe</label>--}}
                                                    {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">--}}
                                                {{--</div>--}}

                                                {{--<button type="submit" class="btn btn-primary">Se connecter</button>--}}

                                                {{--<a href="#">Mot de passe oublié ?</a>--}}
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

                    {{--</ul>--}}


        {{--</nav>--}}





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