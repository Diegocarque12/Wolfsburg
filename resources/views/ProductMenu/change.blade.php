@extends('layouts.app')
@section('imports')

@endsection
@section('content')

<section class="section">
    <h1>Actualizar producto</h1>

    <form class="form" method="post"  action="{{ url('/products/'.$product->id.'/change') }}">
        {{ csrf_field() }}
        <label for="name">Nombre</label>
        <input type="text"  name="name"  value="{{ $product->name }}">

        <label for="price">Precio</label>
        <input type="number" min="0" max="200"  name="price"  value="{{ $product->price }}">
        
        <label for="description">Descripcion</label>
        <textarea   name="description" value="">{{ $product->description }}</textarea>
        
        <label for="category_id">Categoria</label>
		<select name="category_id" >
        <option data-subtext="{{ $product->category->name }}" value="{{ $product->category->id }}">{{ $product->category->name }}</option>
					@foreach ($categories as $category)
						<option data-subtext="{{ $category->name }}" value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach 
        </select>
        <button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{ url('/products/productList') }}" class="btn btn-secondary">Regresar</a>
    </form>
    
</section>

@endsection