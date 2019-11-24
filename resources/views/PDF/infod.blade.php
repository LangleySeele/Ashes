@extends('layouts.pdfinicio')
@section('content')
<!--php artisan make:controller Api\SearchController -->
<html>
	<table border="6">
			<tr>
				<td><h3>escena</h3></td>
				<td><h3>ch_id</h3></td>
				<td><h3>dialogo</h3></td>
			</tr>
			<tr>
			    <td>{{ $dialog->escena }}</td>
				<td>{{ $dialog->ch_id }}</td>
				<td>{{ $dialog->dialogo }}</td>
			</tr>
	</table>
	</html>
@endsection