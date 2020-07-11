@extends('layouts.app')

@section('content')

<section class="about-us">
        <h1 class="about-us__title"> <span class="about-us__mark">Nuestro </span>   Equipo</h1>
        <div class="about-us__container1 ">
            <img class="about-us__container1 about-us__container1--img1" src="{{assets('../src/chef1.jpg')}}" alt="">
            <p class="about-us__container1 about-us__container1--paragrah1">
            Nuestro restaurante es considerado como el mejor de la ciudad de Wolfsburgo, ciudad al norte de Alemania,
             donde se encuentra situado nuestro restaurante.
             Nuestra mayor satisfacción es ver una sonrisa en el rostro
             de nuestros comensales. Y brindarles una experiencia gastronómica propia de nuestro equipo de chefs</p>
        </div>
        <div class="about-us__container2">
            <p class="about-us__container2 about-us__container2--paragrah2" >
            Estas imagenes pertenecen al chef líder de la cocina. El es el famoso Harald Wohlfahrt,
            que mantiene el orden dentro de la cocina junto con sus otros ayudantes, también chefs que acompañan su labor.
            En general, el ambiente de la cocina es cooperativo y busca que todos los integrantes 
            mantengan la misma visión, dar lo mejor de cada uno, como si fuera el último platillo que fueran a preparar.
            </p>
            <img class="about-us__container2 about-us__container2--img2"  src="{{assets('../src/chef2.jpg')}}" alt="">
        </div>
    
</section>

@endsection