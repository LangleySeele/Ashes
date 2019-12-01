@extends('layouts.app')
@section('title','Dialogs Edit')
@section('content')

@include('error')
{!!Form::model($dialog,['route'=>['dialogs.update',$dialog],'method'=>'PUT','files'=>true])!!}
@include('formd')
{{Form::submit('Actualizar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection