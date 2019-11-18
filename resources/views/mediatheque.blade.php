@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
<div class="container">
<div class="derniere-video">
Derniers ajouts
</div>
<div class="gallery js-flickity "
  data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
  <div class="gallery-cell"><a href="#"><img id="recent-1" src=""></a></div>
  <div class="gallery-cell"><a href="#"><img id="recent-2" src=""></a></div>
  <div class="gallery-cell"><a href="#"><img id="recent-3" src=""></a></div>

</div>
         
<div class="derniere-video">
       Thématique
        </div>

      <div class="parent cateVideo">
          
<div class="div1"> <img src="img/environnement-petit.jpg" alt=""></div>
<div class="div2"> <img src="img/audio-image-petit.jpg" alt=""></div>
<div class="div3"> <img src="img/economie-petit.jpg" alt=""></div>
<div class="div4"> <img src="img/environnement-image-petit.jpg" alt=""></div>
<div class="div5"> <img src="img/manuscrit-petit.jpg" alt=""></div>
<div class="div6"> <img src="img/histoire-petit.jpg"alt=""></div>
<div class="div7"> <img src="img/photo_image-petit.jpg"alt=""></div>
<div class="div8"> <a href="/video"><img src="img/video_image-petit.jpg" alt=""></a></div>

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