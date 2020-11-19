@if(isset($equipa->id_equipa))
<h1>Detalhes da equipa {{$equipa->id_equipa}}</h1>
{{$equipa->designacao}}<br>
{{$equipa->designacao_curta}}<br>
{{$equipa->localidade}}<br>
@else
<h1 style="color:#ff0000">Erro</h1>
@endif

Jogador:
@foreach($equipa->jogadores as $jogador)
{{$jogador->nome}}<br>
@endforeach