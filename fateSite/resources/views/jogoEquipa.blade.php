@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/jogoEquipa.css') }}" type="text/css">
@endsection

@section('content')

    <h1 class="titulo-h1">FATE ESPORTS</h1>
    <div class="areaTeam">
        <div class="areaTeam--areaPlayer">
        @foreach($players as $player)
            <div class="areaPlayer--playerBackground">
                <img src="{{$player->img}}" alt="">
            </div>
            <h2>{{$player->nickname}}</h2>
        @endforeach
        </div>
    </div>
    <h1 class="titulo-h1">FATE ESPORTS CONQUISTA</h1>
    <div class="areaConquistas">
        <div class="areaConquistas--QuantidadeTorneios">
            <h2 class="titulo-h2">Torneios</h2>
            <p class="text-p">{{$trophiesCount}}</p>
        </div>
        <div class="areaConquista--firstPlaces">
            <h2 class="titulo-h2">1ª Posição</h2>
            <p class="text-p">{{$firstPlaced}}</p>
        </div>
        <div class="areaConquista--otherPlaces">
            <h2 class="titulo-h2">2ª e 3/4 Posição</h2>
            <p class="text-p">{{$otherPositions}}</p>
        </div>
    </div>
    <h1 class="titulo-h1">FATE ESPORTS TROFEUS GANHOS</h1>
    <div class="listaTorneios">
    @foreach($trophies as $trophie)
        <div class="listaTorneios--torneio">
            <img src="as" alt="">
            <p class="text-p">{{$trophie->name}}</p>
            <p class="text-p">{{$trophie->date}}</p>
        </div>
    @endforeach
    </div>
   
@endsection

@section('scripts')
@endsection