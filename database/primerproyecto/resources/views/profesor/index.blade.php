@extends('admin.app')
@section('titulo','profesor')
@section('contenido')

<div class="alert alert-primary" role="alert">
  Bienvenido: Soy Profesor {{$id}}
  @foreach($frutas as $fruta)
  <br>
        {{$fruta}}
  @endforeach
</div>
@endsection