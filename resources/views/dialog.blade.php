@extends('layouts.app')
@section('title','dialogs')
@section('content')
@csrf
		{!! Form::open(['route' => 'dialogs.index', 'method' => 'GET', 
		'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
			<div class="form-group">
				{!! Form::text('escena',null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}
			</div>
			<button type="submit" class="btn btn-primary">Buscar</button>
		{!! Form::close() !!}
        <div class="row">
		@foreach ($dialogs as $dialog )
		<div class="col-sm">
			<div class="card text-center " style="width: 18rem; margin-top: 70px;">
		<div class="card-body">
			<h5 class="Card-title">{{$dialog->escena}}</h5>
			<h5 class="Card-text">{{$dialog->ch_id}}</h5>
			<h5 class="Card-text">{{$dialog->dialogo}}</h5>
			<a href="#" class="btn btn-primary">
			Delete...</a>
			<a href="#" class="btn btn-primary">Mostrar...</a>
		</div>
	    </div>
	    </div>
		@endforeach
		</div>
		<center><a href="/dialog/create" class="btn btn-primary">
			Crear un dialogo nuevo</a></center>
		<!--<center><a href="#" class="btn btn-primary">
			Descargar dialogos en PDF</a></center>-->
@endsection
