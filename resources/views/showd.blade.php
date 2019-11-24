@extends('layouts.app')
@section('title','dialogs')
@section('content')
		<h5 class="text-center">{{$dialog->name}}</h5>
		<div class="text-center">
			<p>{{$dialog->description}}</p>
			<a href="/delete/{{$dialog->id}}" class="btn btn-primary">
			Delete</a>
			<a href="/characters/{{$dialog->id}}/edit" class="btn btn-secondary">
			Edit</a>
			<a href="/pdfviewd/{{$dialog->id}}" class="btn btn-primary">
			Info en PDF</a>
		</div>
@endsection