@extends('layouts.app')
@section('title','characters')
@section('content')
@csrf

		{!! Form::open(['route' => 'characters.index', 'method' => 'GET', 
		'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
			<div class="form-group">
				{!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}
			</div>
			<button type="submit" class="btn btn-primary">Buscar</button>
		{!! Form::close() !!}
        <div class="row">
		@foreach ($characters as $character )
		<div class="col-sm">
			<div class="card text-center " style="width: 18rem; margin-top: 70px;">
			<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$character->avatar}}" alt="">
		<div class="card-body">
			<h5 class="Card-title">{{$character->name}}</h5>
			<h5 class="Card-text">{{$character->epithet}}</h5>
			<h5 class="Card-text">{{$character->description}}</h5>
			<a href="#" class="btn btn-primary">Ver mas...</a>
			<a href="/delete/{{$character->id}}" class="btn btn-primary">
			Delete...</a>
			<a href="/characters/{{$character->id}}" class="btn btn-primary">Mostrar...</a>
		</div>
	    </div>
	    </div>
		@endforeach
		</div>
		<center><a href="{{ route('listcharacters.pdf') }}" class="btn btn-primary">
			Descargar Personajes en PDF</a></center>

@endsection
