
@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="derniere-video">
        Derniers ajouts
        </div>
<div class="container">
        <div class="gallery js-flickity "
        data-flickity-options='{ "freeScroll": false, "wrapAround": true }'>
        <div class="gallery-cell"><a id="link-1" href=""><img id="recent-1" src=""></a></div>
        <div class="gallery-cell"><a id="link-2" href=""><img id="recent-2" src=""></a></div>
        <div class="gallery-cell"><a id="link-3" href=""><img id="recent-3" src=""></a></div>
      

</div>
        <div class="video">
            <p>Vidéos</p>
              </div>

            <div class="row all ">
                        @foreach ($tabVideos as $item)

                        <div class="carte col-md-3">
                                <a href="#"><img src="{{$item->image}}" alt="Avatar" style="width:90%"></a>
                                <div class="contain">
                                        <h4><b>{{$item->titre}}</b></h4>
                                        <p> blabla</p>
                                </div>
                        </div>
                
                        @endforeach
                </div>

 </div>      

@endSection
@section('js')
        <script type="text/javascript" src="{{ asset('js/client/affichage.js') }}"></script>
@endSection

