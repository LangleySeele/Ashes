@extends('layouts.app')
@section('title','characters')
@section('content')
		<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="../images/{{$character->avatar}}" alt="">
		<h5 class="text-center">{{$character->name}}</h5>
		<div class="text-center">
			<p>{{$character->description}}</p>
			<a href="/delete/{{$character->id}}" class="btn btn-primary">
			Delete</a>
			<a href="/characters/{{$character->id}}/edit" class="btn btn-secondary">
			Edit</a>
			<a href="/pdfview/{{$character->id}}" class="btn btn-primary">
			Info en PDF</a>
		</div>
@endsection