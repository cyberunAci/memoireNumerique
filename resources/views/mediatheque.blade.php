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
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
</div>
         
<div class="derniere-video">
       Thématique
        </div>

      <div class="parent cateVideo">
          
<div class="div1"> <img src="https://via.placeholder.com/250x60" alt=""></div>
<div class="div2"> <img src="https://via.placeholder.com/250x60" alt=""></div>
<div class="div3"> <img src="https://via.placeholder.com/250x60" alt=""></div>
<div class="div4"> <img src="https://via.placeholder.com/250x60" alt=""></div>
<div class="div5"> <img src="https://via.placeholder.com/250x60" alt=""></div>
<div class="div6"> <img src="https://via.placeholder.com/250x60" alt=""></div>
<div class="div7"> <img src="https://via.placeholder.com/250x60" alt=""></div>
<div class="div8"> <img src="https://via.placeholder.com/250x60" alt=""></div>
</div>

<div class="derniere-video">
        Lorem 01
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

       <div class="derniere-video">
            Lorem 02
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