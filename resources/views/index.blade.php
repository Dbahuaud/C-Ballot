@include("head")
<!-- CAROUSEL -->


    <div id="carousel" class="container-fluid">
        <div class="row">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
            <!-- Items -->
                <div class="carousel-inner" style="height: 90vh;">
                    <div class="active carousel-item">


                    <div class="offset-6">
                        <i class="punchline">
                            Votre évènement à l'air vraiment super...<br>
                            Mais vous ne savez pas quel jour l'organiser ?<br>
                            C Ballot !
                        </i>
                    </div>
                        <img class="img-responsive" src="https://i.imgur.com/eWtfMME.png" class="img-responsive"></div>
                    <div class="carousel-item">
                        <div class="offset-6">
                                        <i class="punchline">
                                            On vous demande une info... <br>
                                            Mais vous ne voulez pas que votre nom soit cité ?<br>
                                            C Ballot !
                                        </i>
                        </div>
                        <img class="img-responsive" src="https://images7.alphacoders.com/411/411820.jpg" class="img-responsive"></div>

                    <div class="carousel-item">
                        <div class="offset-6">
                                        <i class="punchline">
                                            Barbecue, saucisses, mergez, brochettes..<br>
                                            Mais qui amène les bières ??<br>
                                            C Ballot
                                        </i>
                        </div>
                        <img class="img-responsive" src="https://static.pexels.com/photos/36487/above-adventure-aerial-air.jpg" class="img-responsive"></div>
                </div>

            </div>
        </div>
    </div>

<div class="offset-3" id="createSondageHome" style="width: 400px;">
    <div class="modal-header">
        <h3>Créer mon sondage</h3>
    </div>
        <!-- content goes here -->
    <form action="post">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="email" class="form-control col-10 offset-1" id="title" placeholder="Donnez un super titre !!">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" maxlength="500" class="form-control col-10 offset-1" id="description" placeholder="Tu sais plus pourquoi tu fais ton sondage ?            C Ballot !"></textarea>
        </div>
        <div class="form-group col-10 offset-1" >
            <label for="datetime_begin" style="display: inline-block">Date de début</label>
            <input class="form-control" type="datetime-local" id="datetime_begin" style="display: inline-block">
        </div>
        <div class="form-group col-10 offset-1" style="text-align: center">
            <label for="datetime_end" style="display: inline-block">Date de fin</label>
            <input class="form-control" type="datetime-local" id="datetime_end" style="display: inline-block">
        </div>
        <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary">Créer</button>
            </div>
        </div>
    </form>
</div>


</body>
</html>