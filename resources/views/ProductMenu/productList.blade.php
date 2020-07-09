@extends('layouts.app')

@section('content')
<section class="list">
<div class="list__section">
	<div class="row justify-content-between m-2">
		<h1>Lista de Productos del Menu</h1>
		<a href="{{ url('/products/create') }}" class="btn btn-outline-primary m-3">Create</a>
	</div>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Precio</th>
	      <th scope="col">Categoria</th>
	      <th scope="col">Descripcion</th>
	      <th scope="col">Opciones</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($products as $product)
	    <tr>
	      <th scope="row">{{ $product->id }}</th>
	      <td>{{ $product->name }}</td>
	      <td>{{ $product->price }}</td>
	      <td>{{ $product->category->name }}</td>
	      <td>{{ $product->description }}</td>
	      <td class="td-actions text-rigth">
	      	
	      	<form method="post" action="{{ url('/products/'.$product->id.'/delete') }}">
	      		{{ csrf_field() }}
	      		<a href="{{ url('/products/'.$product->id.'/change') }}" class="btn btn-simple btn-success btn-xs ">Update</a>
	      		<button type="submit" class="btn btn-simple btn-danger btn-xs ">Delete</button>
	      	</form>
	      </td>
	    </tr>
		@endforeach
	  </tbody>
	</table>
	{{$products->links()}}

</div>
</section>


@endsection