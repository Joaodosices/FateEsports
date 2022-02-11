@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/jogoEquipa.css') }}" type="text/css">
@endsection

@section('content')
    @if(Session::get('authAdmin') == 1)
        <div class="painelAdmin" id="Removido">  
            <a href="/jogos/equipas/admin"><h1 class="tituloPainel titulo-h1"><span>Painel Admin</span></h1></a>          
        </div>
    @endif
    <h1 class="titulo-h1">FATE ESPORTS <span>{{ $gameName[0]->name}}</span></h1>
    <div class="areaTeam">
        @foreach($players as $player)
            <div class="areaTeam--areaPlayer">
                <div class="areaVotePlayer">
                @if(Auth::check())
                    @if($cookieChecker == 0)
                    <a href="/jogos/equipa/{{ $player->id_game }}/upvote/{{ $player->upvotes }}/player/{{ $player->id }}"><img src="https://i.imgur.com/0ob8CaM.png" alt=""></a>
                    @else
                    <img src="https://i.imgur.com/c74BxzQ.png" alt="">
                    @endif
                @endif
                    <p>{{ $player->upvotes }}</p>
                </div>
                <div class="areaPlayer--playerBackground">
                    <img src="https://i.imgur.com/hjEdeNY.png" alt="" class="logoBackgroundPlayer">
                    <img src="{{$player->img}}" alt="" class="logoPlayer">
                </div>
                <h2 class="titulo-h2">{{$player->nickname}}</h2>
            </div>
        @endforeach
    </div>
    <h1 class="titulo-h1">FATE ESPORTS <span>CONQUISTAS</span></h1>
    <div class="areaConquistas">
        <div class="areaConquistas--QuantidadeTorneios">
            <h2 class="titulo-h2">Torneios</h2>
            <p class="text-p"><span>{{$trophiesCount}}</span></p>
        </div>
        <div class="areaConquista--firstPlaces">
            <h2 class="titulo-h2">1ª Posição</h2>
            <p class="text-p"><span>{{$firstPlaced}}</span></p>
        </div>
        <div class="areaConquista--otherPlaces">
            <h2 class="titulo-h2">2ª e 3/4 Posição</h2>
            <p class="text-p"><span>{{$otherPositions}}</span></p>
        </div>
    </div>
    <h1 class="titulo-h1">FATE ESPORTS LISTA <span>TORNEIOS</span></h1>
    <div class="listaTorneios">
    <table class="tableTorneio">
    @foreach($trophies as $trophie)
            <!-- <div class="listaTorneios--torneio"> -->
            
                <tr class="infoTorneio">
                    <td><img src="https://i.imgur.com/gU2Pr1d.png" alt="" class="trophieAnimation"></td>
                    <td><p class="text-p">{{$trophie->name}}</p></td>
                    <td> <p class="text-p">{{$trophie->date}}</p></td>
                </tr>
            
        <!-- </div> -->
    @endforeach
    </table>
    </div>
   
@endsection

@section('scripts')
<script src="{{ asset('js/jogoEquipa.js') }}"></script>
@endsection