@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">NUMERO DOCUMENTO</label>
							<div class="col-md-6">
								<input type="num" class="form-control" name="documento" value="{{ old('documento') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">NOMBRE</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">APELLIDO</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">EMAIL USUARIO</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">CONTRASEÑA</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">CONFIRME CONTRASEÑA</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">ROL</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="rol">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">ESTADO</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="estado">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">GESTION</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="gestion">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									REGISTRAR
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
