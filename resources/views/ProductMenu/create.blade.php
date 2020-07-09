@extends('layouts.app')

@section('content')
<section class="section">
    <h1>Agregar producto</h1>

    <form class="form" method="post"  action="{{ url('/products') }}">
        {{ csrf_field() }}
        <label for="name">Nombre</label>
        <input type="text"  name="name"  placeholder="Nombre de producto">

        <label for="price">Precio</label>
        <input type="number" min="0" max="200"  name="price" placeholder="Precio de venta" >
        
        <label for="description">Descripcion</label>
        <textarea  aria-label="Descripcion del producto"  name="description" value=""></textarea>
        
        <label for="category_id">Categoria</label>
	      <select name="category_id" id="input-category">
	      	@foreach ($categories as $category)
	        	<option data-subtext="{{ $category->name }}" value="{{ $category->id }}" >{{ $category->name }}</option>
	        @endforeach
          </select>
          
          <button type="submit" class="btn btn-primary">Guardar</button>
	  <a href="{{ url('/products/productList') }}" class="btn btn-secondary">Regresar</a>
    </form>
    
</section>
@endsection