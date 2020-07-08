@extends('layouts.app')
@section('imports')
use App\category;
<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200&family=Playball&family=Poppins:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')
<section class="menu">

<h1 class="menu__title">Menu <span class="menu__title menu__title--mark">a la carte </span> </h1>

<div class="menu__container">
    <div class="container container--left">  

       <article class="category category--style">
        @foreach($categories as $category)
            @if ($category->id == 1)
            <h2 class="category category--title">{{ $category->name}}</h2>    
            <ul class="category category--list">
            <li class="category category--item"> {{ $category->productMenu->count()}}</li>
            </ul>
            @endif
         @endforeach
        </article>

        
        <article class="category category--style">
        @foreach($categories as $category)
            @if ($category->id == 2)
            <h2 class="category category--title">{{ $category->name}}</h2>    
            <ul class="category category--list">
            <li class="category category--item"> {{ $category->description}}</li>
            </ul>
            @endif
         @endforeach
        </article>

        <article class="category category--style">
        @foreach($categories as $category)
            @if ($category->id == 3)
            <h2 class="category category--title">{{ $category->name}}</h2>    
            <ul class="category category--list">
            <li class="category category--item"> {{ $category->description}}</li>
            </ul>
            @endif
         @endforeach
        </article>

    </div>

    <div class="container container--rigth">

    <article class="category category--style">
        @foreach($categories as $category)
            @if ($category->id == 4)
            <h2 class="category category--title">{{ $category->name}}</h2>    
            <ul class="category category--list">
            <li class="category category--item"> {{ $category->description}}</li>
            </ul>
            @endif
         @endforeach
        </article>

        <article class="category category--style">
        @foreach($categories as $category)
            @if ($category->id == 5)
            <h2 class="category category--title">{{ $category->name}}</h2>    
            <ul class="category category--list">
            <li class="category category--item"> {{ $category->description}}</li>
            </ul>
            @endif
         @endforeach
        </article>

    </div>
</div>


</section>
@endsection