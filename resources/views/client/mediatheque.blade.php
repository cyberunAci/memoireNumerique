@section('css')
<link rel="stylesheet" href="{{ asset('css/mediatheque.css') }}">
@endSection
@extends('layouts.app')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">
<div class="derniere-video">
Derniers ajouts
</div>
<div class="gallery js-flickity "
  data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
  <div class="gallery-cell"><a id="link-1" href=""><img id="recent-1" src=""></a></div>
  <div class="gallery-cell"><a id="link-2" href=""><img id="recent-2" src=""></a></div>
  <div class="gallery-cell"><a id="link-3" href=""><img id="recent-3" src=""></a></div>

</div>
       
<div class="derniere catagorie">
  
</div>
<div class="derniere-video">
       Thématique
        </div>

      <div class="parent cateVideo">
<div class="div1"> <img src="img/environnement-petit-triangle.jpg" alt=""></div>
<div class="div2"> <img src="img/audio-petit-triangle.jpg" alt=""></div>
<div class="div3"> <img src="img/economie-petit-triangle.jpg" alt=""></div>
<div class="div4"> <img src="img/environnement-image-petit-triangle.jpg" alt=""></div>
<div class="div5"> <img src="img/histoire-petit-triangle.jpg"alt=""></div>
<div class="div6"> <a href="/article"><img src="img/manuscrit-petit-triangle.jpg" alt=""></a></div>
<div class="div7"> <a href="/photo"><img src="img/photo_image-petit-triangle.jpg"alt=""></a></div>
<div class="div8"> <a href="/video"><img src="img/video_image-petit-triangle.jpg" alt=""></a></div>

</div>

<div class="audio">
       <p>Audio</p> 
         </div>
 
       <div class="parent cateVideo">
 <div class="div1"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div2"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div3"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div4"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div5"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div6"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div7"> <img src="https://via.placeholder.com/250" alt=""></div>
 <div class="div8"> <img src="https://via.placeholder.com/250" alt=""></div>
       </div>

       <div class="video">
           <p>Vidéo</p>
             </div>
     
           <div class="parent cateVideo">
     <div class="div1"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div2"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div3"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div4"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div5"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div6"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div7"> <img src="https://via.placeholder.com/250" alt=""></div>
     <div class="div8"> <img src="https://via.placeholder.com/250" alt=""></div>
           </div>
</div>

<!-- partial -->

@endSection

@section('js')
  <script type="text/javascript" src="{{ asset('js/admin/manageMemoires.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/client/affichage.js') }}"></script>
@endSection