@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/jogoEquipaAdmin.css') }}" type="text/css">
@endsection

@section('content')
<div class="painelAdmin" id="Removido">  
    <h1 class="tituloPainel titulo-h1">Painel Admin <span>Jogadores/Troféus</span></h1>
    <div>
        <div>
            <ul>
                @foreach($gamesList as $game)
                    <li><a href="/jogos/equipas/admin/{{ $game->id }}">{{$game->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <div>
                @foreach($listPlayers as $player)
                    <p>{{$player->nickname}}</p>
                @endforeach
            </div>
        </div>
    </div>
    <div>
        <br>
        @foreach($trophieList as $trophie)
            <p>{{$trophie->name}}</p>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
@endsection