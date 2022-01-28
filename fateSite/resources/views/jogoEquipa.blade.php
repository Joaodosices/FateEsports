@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/paginaHome.css') }}" type="text/css">
@endsection

@section('content')
   
    @foreach($players as $player)
        {{$player->nickname}}
        {{$player->img}}
        {{$player->id_game}}
        {{$player->id_user}}
        <br>
    @endforeach
   
@endsection

@section('scripts')
@endsection