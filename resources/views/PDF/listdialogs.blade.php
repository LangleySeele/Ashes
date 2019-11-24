@extends('layouts.pdfinicio')
@section('content')
<html>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>escena</th>
				<th>ch_id</th>
				<th>dialogo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($dialogs as $dialog)
			<tr>
				<td>{{ $dialog->escena }}</td>
				<td>{{ $dialog->ch_id }}</td>
				<td>{{ $dialog->dialogo }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</body>
	</html>
@endsection