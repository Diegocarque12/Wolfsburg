@extends('layouts.app')

@section('content')

	<div class="section">
		<h1 class="display-4">Editar un producto </h1>

		<form method="post" action="{{ url('/products/'.$product->id.'/edit') }}">
				{{ csrf_field() }}
			<div class="form-row">
				<div class="form-group col-md-6">
				<label for="name">Nombre</label>
				<input type="text" class="form-control"  name="name" value="{{ $product->name }}">
				</div>
				<div class="form-group col-md-1">
				<label for="price">Precio</label>
				<input type="number" min="0" max="200" class="form-control"  name="price" value="{{ $product->price }}">
				</div>
			</div>

				<div class="form-group">
				<label for="description">Descripcion</label>
				<textarea class="form-control"  name="description" value="">{{ $product->description }}</textarea>
				</div>

				<div class="form-group col-md-3 p-0">
				<label for="category_id">Categoria</label>
				<select name="category_id" class="form-control">
					<option data-subtext="{{ $product->category->name }}" value="{{ $product->category->id }}">{{ $product->category->name }}
					@foreach ($categories as $category)
						<option data-subtext="{{ $category->name }}" value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach 
				</select>
	     	</div>

			<button type="submit" class="btn btn-primary">Actualizar</button>
			<a href="{{ url('/products/productList') }}" class="btn btn-secondary">Regresar</a>
		</form>
		</div>
@endsection