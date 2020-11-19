@extends('layout')
@section('conteudo')
@foreach($jogadores as $jogador)
<a href="{{route('jogadores.show', ['algo'=> $jogador->id_jogador])}}">{{$jogador->nome}}</a>

@endforeach
@endsection