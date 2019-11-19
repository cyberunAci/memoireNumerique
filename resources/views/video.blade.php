@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="derniere-video">
        Derniers ajouts
        </div>
<div class="container">
        <div class="gallery js-flickity "
        data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
        <div class="gallery-cell"><a id="link-1" href=""><img id="recent-1" src=""></a></div>
        <div class="gallery-cell"><a id="link-2" href=""><img id="recent-2" src=""></a></div>
        <div class="gallery-cell"><a id="link-3" href=""><img id="recent-3" src=""></a></div>
      

</div>
        <div class="video">
            <p>Vidéo</p>
              </div>

            <div class="container all">
              
                      </div>
 </div>
       


            </div>

@endSection