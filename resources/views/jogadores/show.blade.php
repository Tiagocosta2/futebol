@if(isset($jogador->id_jogador))
<h1>Detalhes do jogador {{$jogador->id_jogador}}</h1>
{{$jogador->nome}}<br>
{{$jogador->nacionalidade}}<br>
Equipa:

{{$jogador->equipas->designacao}}

@else
<h1 style="color:#ff0000">Erro</h1>


@endif
