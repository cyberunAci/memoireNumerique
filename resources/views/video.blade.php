@extends('layouts.app')
@section('content')
<h1 class="text-center">VIDEO</h1>
    {{-- <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active " data-interval="10000">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/mn.jpeg" class="d-block w100" alt="...">
                </div>
                <div class="col-md-4">
                    <img src="img/mn.jpeg" class="d-block w100" alt="...">
                </div>
                <div class="col-md-4">
                    <img src="img/mn.jpeg" class="d-block w100" alt="...">
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="2000">
            <img src="img/mn.jpeg" class="d-block w-15 h-15" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/mn.jpeg" class="d-block w-15 h-15" alt="...">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>   --}}
    
    <form onsubmit="sendVideo()">
        <button type="submit"> BOUTON </button>
    </form>
    <div class="row text-center m-2 cateVideo">
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
        <div class="col-md-3"><img src="img/mn.jpeg"></div>
    </div>

    <div class="complet">

    </div>


    
    
@endSection