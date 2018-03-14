<!DOCTYPE html>
<html lang="en">
<head>
    <title>C-Ballot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>

    <div id="parent">


        <div id="carousel" class="container-fluid">
            <div class="row">
                <div id="myCarousel" class="carouSEL carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
                    <!-- Items -->
                    <div class="carousel-inner" style="height: 75vh;">
                        <div class="active carousel-item">


                            <div class="offset-6">
                                <i class="punchlineh">
                                    Votre évènement à l'air vraiment super...<br>
                                    Mais vous ne savez pas quel jour l'organiser ?<br>
                                    C Ballot !
                                </i>
                            </div>
                            <img src="https://i.imgur.com/eWtfMME.png" class="img-responsive"></div>
                        <div class="carousel-item">
                            <div class="offset-6">
                                <i class="punchlineh">
                                    On vous demande une info... <br>
                                    Mais vous ne voulez pas que votre nom soit cité ?<br>
                                    C Ballot !
                                </i>
                            </div>
                            <img src="https://images7.alphacoders.com/411/411820.jpg" class="img-responsive"></div>

                        <div class="carousel-item">
                            <div class="offset-6">
                                <i class="punchlineh">
                                    Barbecue, saucisses, mergez, brochettes..<br>
                                    Mais qui amène les bières ??<br>
                                    C Ballot
                                </i>
                            </div>
                            <img src="https://static.pexels.com/photos/36487/above-adventure-aerial-air.jpg" class="img-responsive"></div>
                    </div>

                </div>
            </div>
        </div>


            <!-- CARROUSSEEEEELLLLL-->
            {{--<div>--}}
                {{--<div class="row">--}}
                    {{--<div id="myCarousel" class="carouSEL slide carousel-fade" data-ride="carousel">--}}
                        {{--<!-- Dot Indicators -->--}}
                        {{--<ol class="carousel-indicators">--}}
                            {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
                            {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                            {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
                        {{--</ol>--}}
                        {{--<!-- Items -->--}}
                        {{--<div class="carousel-inner carouSEL" style="height: 75vh;">--}}
                            {{--<div class="  active carousel-item">  <div class="offset-6">--}}
                                    {{--<i class="punchline">--}}
                                        {{--Votre évènement à l'air vraiment super...<br>--}}
                                        {{--Mais vous ne savez pas quel jour l'organiser ?<br>--}}
                                        {{--C Ballot !--}}
                                    {{--</i>--}}
                                {{--</div> <img src="https://i.imgur.com/eWtfMME.png" class="img-responsive"></div>--}}
                            {{--<div class=" carousel-item">--}}
                                    {{--<div class="offset-6">--}}
                                        {{--<i class="punchline">--}}
                                            {{--On vous demande une info... <br>--}}
                                            {{--Mais vous ne voulez pas que votre nom soit cité ?<br>--}}
                                            {{--C Ballot !--}}
                                        {{--</i>--}}
                                     {{--<img src="https://images7.alphacoders.com/411/411820.jpg" class="img-responsive"></div>--}}
                            {{--<div class=" carousel-item"> <div class="offset-6">--}}
                                    {{--<i class="punchline">--}}
                                        {{--Barbecue, saucisses, mergez, brochettes..<br>--}}
                                        {{--Mais qui amène les bières ??<br>--}}
                                        {{--C Ballot--}}
                                    {{--</i>--}}
                                {{--</div> <img src="https://static.pexels.com/photos/36487/above-adventure-aerial-air.jpg" class="img-responsive"></div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}

        {{--</div>--}}
        <div class="img">

        </div>
    </div>

<style>
.carouSEL{  position: relative;
            /*left: -200px;*/
            
            /*height: 300px;*/
            transform: skewY(-2deg);}
    #parent{
        width: 100%;
        height: 300px;
        overflow: hidden;
    }
    .img {
        background-color: green;
        height: 250px;
        width: 250px;
        position: absolute;
        top: 200px;
        left: 75px;

    }
    .punchlineh{
        position: absolute;
        top: 100px;
        color: white;
        transform: skewY(2deg);
    }
    .carousel-inner{

    }
</style>

