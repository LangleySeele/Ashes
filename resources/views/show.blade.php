@extends('layouts.app')
@section('title','characters')
@section('content')
		
			<table>
		<div>
			<tr>
			<td><img style="height: 250px; width: 250px; background-color: #EFEFEF; margin: 20px;" 
			class="center" src="../images/{{$character->avatar}}" alt=""> 
			</td>
			<td>
			<h3 class="text-center">Nombre: {{$character->name}}</h3>
			<h3 class="text-center">Apellido: {{$character->last_name}}</h3>
			<h3 class="text-center">Apodo: {{$character->epithet}}</h3>
			</td>
			</tr>
			<tr>
			<td>
			</td>
			<td>
			<h3 class="text-center">Rasa: {{$character->race}}</h3>
			<h3 class="text-center">Genero: {{$character->gender}}</h3>
			<h3 class="text-center">Altura: {{$character->height}}</h3>
			<h3 class="text-center">Edad: {{$character->age}} años</h3>
			<h3 class="text-center">Armas: {{$character->weapons}}</h3>
			<h3 class="text-center">Afiliacion: {{$character->affiliation}}</h3>
			<h3 class="text-center">Descripcion: {{$character->description}}</h3>
			</td>
			</tr>
			</table><br><br><br><br>
			<a href="/delete/{{$character->id}}" class="btn btn-primary">
			Delete</a>
			<a href="/characters/{{$character->id}}/edit" class="btn btn-secondary">
			Edit</a>
			<a href="/pdfview/{{$character->id}}" class="btn btn-primary">
			Info en PDF</a>
		</div>
@endsection
