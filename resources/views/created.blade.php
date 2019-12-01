@extends('layouts.app')
@section('title', 'Dialog Create')
@section('content')

@include('error')
{!!Form::open(['route'=>'dialog.store','method'=>'POST','files'=>'true'])  !!}
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
@include('formd')
{{Form::submit('Guardar',['class'=>'btn btn_primary'])}}
{!!Form::close()!!}

@endsection
