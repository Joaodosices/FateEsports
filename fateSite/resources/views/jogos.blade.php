@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/paginaJogos.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')


<div class="container">
    <div id="area-jogos">
        @foreach($imgGames as $imgGame)
            @if($imgGame->description == 'paginaJogos')
                <div id="carta-jogo-frente" class="cartas">
                    <a href="jogos/{{ $imgGame->id_game }}/equipa"><img class="img-jogos" src="{{ $imgGame->img }}" alt="imagem de jogos"></a>
                </div>
                <!-- <div id="carta-jogo-atras" class="cartas">
                    <img class="img-jogos"  src="{{ $imgGame->img }}" alt="imagem de jogos">
                </div> -->
            @endif
        @endforeach
    </div>
</div>

<div id="area-video">
    <iframe class="video" width="75%" height="90%" src="https://www.youtube.com/embed/b_AD5Qtnbnc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js" integrity="sha512-gWlyRVDsJvp5kesJt4cSdPPLZIBdln/uSwzYgUicQcbTgRNQE4QhP5KUBIYlLYLkiKIQiuD7KUMHzqGNW/D2bQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/jogos.js') }}"></script>
@endsection