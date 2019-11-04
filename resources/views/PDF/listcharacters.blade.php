@extends('layouts.pdfinicio')
@section('content')
<html>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Last Name</th>
				<th>Epithet</th>
				<th>Race</th>
				<th>Gender</th>
				<th>Height</th>
				<th>Age</th>
				<th>Weapons</th>
				<th>Affiliation</th>
				<th>Description</th>
				<!--<th>Avatar</th>-->
				<th>Imagen</th>
			</tr>
		</thead>
		<tbody>
			@foreach($characters as $character)
			<tr>
				<td>{{ $character->id }}</td>
				<td>{{ $character->name }}</td>
				<td>{{ $character->last_name }}</td>
				<td>{{ $character->epithet }}</td>
				<td>{{ $character->race }}</td>
				<td>{{ $character->gender }}</td>
				<td>{{ $character->height }}</td>
				<td>{{ $character->age }}</td>
				<td>{{ $character->weapons }}</td>
				<td>{{ $character->affiliation }}</td>
				<td>{{ $character->description }}</td>
				<!--<td class="text-right">{{ $character->avatar }}</td>-->
				<td><img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;
			" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$character->avatar}}" alt=""></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</body>
	</html>
@endsection