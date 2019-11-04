@extends('layouts.pdfinicio')
@section('content')
<!--php artisan make:controller Api\SearchController -->
<html>
	<table border="6">
			<tr>
				<td><h3>Name</h3></td>
				<td><h3>Last Name</h3></td>
				<td><h3>Epithet</h3></td>
				<td><h3>Race</h3></td>
				<td><h3>Gender</h3></td>
			</tr>
			<tr>
			    <td>{{ $character->name }}</td>
				<td>{{ $character->last_name }}</td>
				<td>{{ $character->epithet }}</td>
				<td>{{ $character->race }}</td>
				<td>{{ $character->gender }}</td>
			</tr>
			<tr>
			    <td><h3>Age</h3></td>
				<td><h3>Weapons</h3></td>
				<td><h3>Affiliation</h3></td>
				<td><h3>Description</h3></td>
				<td><h3>Height</h3></td>
			</tr>
			<tr>
				<td>{{ $character->age }}</td>
				<td>{{ $character->weapons }}</td>
				<td>{{ $character->affiliation }}</td>
				<td>{{ $character->description }}</td>
				<td>{{ $character->height }}</td>
			</tr>
			<tr>
			<td><h3>Imagen</h3></td>
			</tr>
			<tr>
			<td><img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$character->avatar}}" alt="">
			</td>
			</tr>
	</table>
	</html>
@endsection