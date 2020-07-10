@extends('layouts.app')
@section('imports')

@endsection
@section('content')

<section class="section">
    <h1 class="section__title">Actualizar producto</h1>

    <form class="form" method="post"  action="{{ url('/products/'.$product->id.'/edit') }}">
        {{ csrf_field() }}
        <label class="form__label" for="name">Nombre</label>
        <input class="form-control form-control--input" type="text"  name="name"  value="{{ $product->name }}">

        <label class="form__label"  for="price">Precio</label>
        <input class="form-control form-control--input"  type="number" min="0" max="200"  name="price"  value="{{ $product->price }}">
        
        <label class="form__label" for="description">Descripcion</label>
        <textarea  class="form-control form-control--text"   name="description" value="">{{ $product->description }}</textarea>
        
        <label class="form__label" for="category_id">Categoria</label>
		<select class="form-control form-control--select" name="category_id" >
        <option data-subtext="{{ $product->category->name }}" value="{{ $product->category->id }}">{{ $product->category->name }}</option>
					@foreach ($categories as $category)
						<option data-subtext="{{ $category->name }}" value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach 
        </select>
        <div class="form__buttons">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ url('/products') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </form>
    
</section>

@endsection