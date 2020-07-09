@extends('layouts.app')
@section('imports')
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Podkova&family=Poppins:wght@800&display=swap" rel="stylesheet">  
@endsection
@section('content')

 <section class="section--main">
      <img src="../src/home-firstCopy.jpg" class="section__img" alt="">
      <div class="section__text">
        <h2 class="section__text--h2">Menú</h2>
        <h3 class="section__text--h3">Gourmet</h3>
        <p class="section__text--p">Ordena ahora</p>
        <a class="section__text--a" href="">Vamos a probar!</a>
      </div>
  </section>

  <section class="section--second">
    <p class="section__text--p">Estas son algunas imágenes de nuestros platillos, podrían ser entregados y servidos hasta la puerta de tu casa.</p>
    <div class="section__img ">
      <img src="../src/platillo1.jpg" class="section__img--top-left" alt="">
      <img src="../src/platillo3.jpg" class=" section__img--right mx-auto d-block" alt="">
      <img src="../src/platillo2.jpg" class="section__img--bott-left" alt="">
    </div>
    
    <div class="section--delivery-info">
      <p class="section__text--p">Si quieres hacer una orden puedes contactarnos al número: (+506) 2268 1546</p>
    </div>
  </section>

  <section class="section--sponsor">
    <p>Algunos de nuestros patrocinadores</p>
    <div class="section--sponsor__items text-center ">
      <img class="section__img" src="../src/p-joseph.png" alt="">
      <img class="section__img" src="../src/p-beer.png" alt="">
      <img class="section__img" src="../src/p-jw.png" alt="">
      <img class="section__img" src="../src/p-uber.png" alt="">
      <img class="section__img" src="../src/p-gs.png" alt="">
      <img class="section__img" src="../src/p-thepearl.png" alt="">
    </div>
  </section>

@endsection