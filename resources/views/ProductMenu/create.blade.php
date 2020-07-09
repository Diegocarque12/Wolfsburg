@extends('layouts.app')

@section('content')
<section class="section">
    <h1 class="section__title">Agregar producto</h1>

    <form class="form" method="post"  action="{{ url('/products') }}">
        {{ csrf_field() }}
        <label class="form__label" for="name">Nombre</label>
        <input class="form-control form-control--input" type="text"  name="name"  placeholder="Nombre de producto">

        <label class="form__label" for="price">Precio</label>
        <input  class="form-control form-control--input" type="number" min="0" max="200"  name="price" placeholder="Precio de venta" >
        
        <label class="form__label"for="description">Descripcion</label>
        <textarea  class="form-control form-control--text" aria-label="Descripcion del producto"  name="description" value=""></textarea>
        
        <label class="form__label" for="category_id">Categoria</label>
	      <select class="form-control form-control--select" name="category_id" id="input-category">
	      	@foreach ($categories as $category)
	        	<option data-subtext="{{ $category->name }}" value="{{ $category->id }}" >{{ $category->name }}</option>
	        @endforeach
          </select>
          
          <div class="form__buttons">
          <button type="submit" class="btn btn-primary">Guardar</button>
	      <a href="{{ url('/products/productList') }}" class="btn btn-secondary">Regresar</a>
          </div>
          
    </form>
    
</section>
@endsection