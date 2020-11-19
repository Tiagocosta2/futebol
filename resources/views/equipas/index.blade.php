@extends('layout')
@section('conteudo')
Designação

@foreach($equipas as $equipa)
<a href="{{route('equipas.show', ['algo'=> $equipa->id_equipa])}}">{{$equipa->designacao}}</a>

@endforeach
@endsection