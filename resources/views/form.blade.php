@extends('layouts.app')
@section('imports')

@endsection
@section('content')
<section class="contact">
        <div class="contact__tittle">
            <h1 class="contact__tittle contact__tittle--h1">CONTÁCTENOS</h1>
        </div>
       
        <form method="post" action="" class="contact__form">
            <input type="text" class="contact__form contact__form--input" name="name" placeholder="Nombre">
            <input id="email" placeholder="Correo"  type="email" class="contact__form contact__form--input" name="email" value="" required autofocus>
            <input type="text" class="contact__form contact__form--input" name="subject" placeholder="Asunto">
            <textarea class="contact__form contact__form--textarea" placeholder="Mensaje" name="message" aria-label="Mensaje"></textarea>
            <button type="submit" class="contact__form contact__form--btn">Enviar</button>
        </form>
    </section>
    
@endsection