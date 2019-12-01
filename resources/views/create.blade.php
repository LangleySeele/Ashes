@extends('layouts.app')
@section('title', 'Characters Create')
@section('content')

@include('error')

{!!Form::open(['route'=>'characters.store','method'=>'POST','files'=>'true'])  !!}
<!--<div class="from-group">
  {{Form::label('name','Nombre')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
  {{Form::label('apellido', 'Apellido')}}
  {{Form::text('apellido',null,['class'=>'form-control'])}}
</div>
<div class="from-group">

  {{Form::label('avatar', 'Avatar')}}
  {{Form::file('avatar')}}
</div>-->
@include('form')
{{Form::submit('Guardar',['class'=>'btn btn_primary'])}}
{!!Form::close()!!}

@endsection
