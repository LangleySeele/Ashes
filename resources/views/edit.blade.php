@extends('layouts.app')
@section('title','Characters Edit')
@section('content')

@include('error')
{!!Form::model($character,['route'=>['characters.update',$character],'method'=>'PUT','files'=>true])!!}
@include('form')
{{Form::submit('Actualizar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection
