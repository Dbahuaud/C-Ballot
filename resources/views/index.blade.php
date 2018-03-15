    @include('head')
    <!-- CAROUSEL -->

    <div id="carousel" class="container-fluid">
        <div class="row">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7500">
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
    @if(Session::has('user') && \App\Organizations::where('id_user', Session::get('user')->id)->count() != 0)
        <div class="offset-3" id="createSondageHome" style="width: 400px;max-height: 500px;overflow:scroll; overflow-x:hidden;">
            <div class="modal-header">
                <h3>Créer mon sondage</h3>
            </div>
            <!-- content goes here -->
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
                    <p><input type="date" name="begin_d"><input type="time" name="begin_t"></p>
                </div>
                <div class="form-group col-10 offset-1" style="text-align: center">
                    <label for="datetime_end" style="display: inline-block">Date de fin</label>
                    <p>
                        <input type="date" name="end_d"><input type="time" name="end_t">
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
    @endif
    <div class="container-fluid">
        <h1 style="text-align: center; margin: 50px 0;">Collaborateurs au projet :</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" id="profil_dev">
                <p>
                    <img src="photo/marie.jpg" title="Marie BRIAND FREDET">
                </p>
                <p>
                <h2>Marie BRIAND FREDET</h2>
                <p>Développement Back / Intégration Front</p>
                <p><a href="mailto:marie.briand@imie.fr">marie.briand@imie.fr</a></p>
                <p><a href="tel:0682477407">06 82 47 74 07</a></p>
                <p>IT-START Imie Nantes</p>

                </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" id="profil_dev">
                <p>
                    <img src="photo/dim.jpg" title="Dimitri BAHUAUD">
                </p>
                <p>
                <h2>Dimitri BAHUAUD</h2>
                <p>Développement Back / Intégration Front</p>
                <p><a href="mailto:marie.briand@imie.fr">dimitri.bahuaud@imie.fr</a></p>
                <p><a href="tel:0610025549">06 10 02 55 49</a></p>
                <p>IT-START Imie Nantes</p>

                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" id="profil_dev">
                <p>
                    <img src="photo/fred.jpg" title="Frédéric GUEHO">
                </p>
                <p>
                <h2>Frédéric GUEHO</h2>
                <p>Développement Back / Intégration Front</p>
                <p><a href="mailto:marie.briand@imie.fr">frederic.gueho@imie.fr</a></p>
                <p><a href="tel:0669362925">06 69 36 29 25</a></p>
                <p>IT-START Imie Nantes</p>

                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" id="profil_dev">
                <p>
                    <img src="photo/ayoub.jpg" title="Ayoub ASSAÏRH">
                </p>
                <p>
                <h2>Ayoub ASSAÏRH</h2>
                <p>Développement Back / Intégration Front</p>
                <p><a href="mailto:ayoub.assairh@imie.fr">ayoub.assairh@imie.fr</a></p>
                <p><a href="tel:0647502209">06 47 50 22 09</a></p>
                <p>IT-START Imie Nantes</p>

                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" id="profil_dev">
                <p>
                    <img src="photo/anatole.jpg" title="Anatole PIVETEAU">
                </p>
                <p>
                    <h2>Anatole PIVETEAU</h2>
                    <p>Développement Back / Intégration Front</p>
                    <p><a href="mailto:anatole.piveteau@imie.fr">anatole.piveteau@imie.fr</a></p>
                    <p><a href="tel:0648162159">06 48 16 21 59</a></p>
                    <p>IT-START Imie Nantes</p>
                </p>
            </div>

        </div>
    </div>

</body>
</html>