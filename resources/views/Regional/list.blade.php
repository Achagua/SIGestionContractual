@extends('app')

@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'regional/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
		<div class="form‐group">
			<label for="exampleInputName2">NOMBRE</label>
			<input type="text" class="form‐control" name = "name" >
		</div>
		<button type="submit" class="btn btn‐default">BUSCAR</button>
		<a href="{{ route('regional.index') }}" class="btn btn‐primary">TODOS</a>
		<a href="{{ route('regional.create') }}" class="btn btn‐primary">CREAR</a>
		{!! Form::close() !!}
		<br>
		<table class="table table‐condensed table‐striped table‐bordered">
			<thead>
				<tr>
					<th>NUMERO REGIONAL</th>
					<th>ZONA REGIONAL</th>
					<th>NOMBRE REGIONAL</th>
					<th>NOMBRE DIRECTOR</th>
					<th>DIRECCION</th>
					<th>TELEFONO</th>
				</tr>
			</thead>
			<tbody>
				@foreach($regional as $regional)
				<tr>
					<td>{{ $regional->n_regional }}</td>
					<td>{{ $regional->zona_regional }}</td>
					<td>{{ $regional->nombre_regional }}</td>
					<td>{{ $regional->nombre_director_regional }}</td>
					<td>{{ $regional->direccion_regional }}</td>
					<td>{{ $regional->telefono_regional }}</td>
					<td>
					<a class="btn btn‐primary btn‐xs" href="{{ route('regional.edit',['id' => $regional>id] )}}" >EDITAR</a>
					<a class="btn btn‐danger btn‐xs" href="{{ route('regional/destroy',['id' => $regional>id] )}}" >ELIMINAR</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection