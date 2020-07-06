@extends('layouts.app')

@section('content')

<div class="section">
	<h1 class="display-4">Create a new Product </h1>

	<form method="post" action="{{ url('/products') }}">
		{{ csrf_field() }}
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="name">Nombre</label>
	      <input type="text" class="form-control" name="name" placeholder="Nombre de producto">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="price">Precio</label>
	      <input type="number" min="0" max="200" class="form-control"name="price" placeholder="Precio de venta">
	    </div>
	  </div>

	   	<div class="form-group">
	      <label for="description">Descripcion</label>
	      <textarea class="form-control"  name="description" aria-label="Descripcion del producto"></textarea>
	   	</div>

	    <div class="form-group col-md-3 p-0">
	      <label for="category_id">Categoria</label>
	      <select name="category_id" id="input-category" class="form-control">
	      	@foreach ($categories as $category)
	        	<option data-subtext="{{ $category->id }}" value="{{ $category->name }}" >{{ $category->name }}</option>
	        @endforeach
	      </select>
	    </div>

	  <button type="submit" class="btn btn-primary">Create new Product</button>
	</form>

@endsection