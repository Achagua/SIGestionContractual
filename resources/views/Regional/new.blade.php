@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-4">
		{!!Form::open(['route'=>'regional.store', 'method'=>'post', 'novalidate'])!!}
			<div class="form-group">
				{!!Form::label('n_regional', 'Numero')!!}
				{!!Form::text('n_regional', null, ['class'=>'form-control', 'required'=>'required'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('zona_regional', 'Zona Regional')!!}
				{!!Form::text('zona_regional', null, ['class'=>'form-control', 'required'=>'required'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('nombre_regional', 'Nombre Regional')!!}
				{!!Form::text('nombre_regional', null, ['class'=>'form-control', 'required'=>'required'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('nombre_director_regional', 'Nombre Director')!!}
				{!!Form::text('nombre_director_regional', null, ['class'=>'form-control', 'required'=>'required'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('direccion_regional', 'Direccion')!!}
				{!!Form::text('direccion_regional', null, ['class'=>'form-control', 'required'=>'required'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('telefono_regional', 'Telefono')!!}
				{!!Form::text('telefono_regional', null, ['class'=>'form-control', 'required'=>'required'])!!}
			</div>
			<div class="form-group">
				{!!Form::submit('Enviar', ['class'=>'btn btn-success'])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection