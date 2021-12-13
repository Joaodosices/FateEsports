@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/paginaHome.css') }}" type="text/css">
@endsection

@section('content')
    <div id="wrap">
        <div class="textColumn">
            <section class="heroLanding">
                <div class="heroLanding--texto">
                    <h1>Fate <br> Esports</h1>
                    <h2>Está a chegar a melhor organização do país</h2>
                    <div>
                        <a href="#">Registar</a>
                    </div>
                </div>
                <div class="heroLanding--AreaImg">
                    <img src="img/logo/logoFate.png" alt="Logotipo da Fate Esports">
                </div>
            </section>
        </div>
        <div class="areaSeta">
            <a href="#mover">
                <div class="areaArrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
        <section class="ondeEstamos">
            
                <div class="ondeEstamos--texto">
                    <div class="textColumn1 caixaOndeEstamos">
                        <h1>Onde <span>Estamos?</span></h1>
                        <p>A Fate Esports conta com equipas em ínumeros jogos, todos com o objetivo de ganhar e doar!</p>
                        <br>
                        <p>Alguns jogos onde a Fate participa:</p>
                    </div>
                </div>

            <div class="ondeEstamos--jogos">
                <div class="imgJogo">
                    <img src="img/homePage/jogos/apexLegendsLogo.png" alt="Logotipo do jogo Apex Legends">
                </div>
                <div class="imgJogo">
                    <img src="img/homePage/jogos/CSGO-LOGO.png" alt="Logotipo do jogo Counter Strike Global Offensive">
                </div>
                <div class="imgJogo">
                    <img src="img/homePage/jogos/LolLogo.png" alt="Logotipo do jogo League Of Legends">
                </div>
                <div class="imgJogo">
                    <img src="img/homePage/jogos/Rainbow-Six-Logo.png" alt="Logotipo do jogo Rainbow Six Siege">
                </div>
                <div class="imgJogo">
                    <img src="img/homePage/jogos/rocketLogo.png" alt="Logotipo do jogo Rocket League">
                </div>
            </div>
        </section>
        @if (Auth::check())
            <div class="painelAdmin" id="Removido">
                <h1 class="tituloPainel">Painel Admin</h1>
                <div class="painelAdmin--conteudo">
                    <div class="conteudo--imgs">
                        <div class="conteudo--imgs__background">
                            @foreach($imgs as $img)
                                <div class="adminImgArea">
                                    <form action="" method="post"></form>
                                    <img src="{{ $img->img }}" alt="">
                                    <a href="delete/{{ $img->id }}" class='adminImgArea__sairArea'><img src="img\autenticacao\close.png" alt=""></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="conteudo--adicionarImg">
                        <form action="{{ route('index.store') }}" method="POST">
                            @csrf
                            <label for="listaJogos" class="lblListaJogos">Selecionar jogo: </label>
                            <select name="id_game" id="listaJogos">
                                @foreach($games as $game)
                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                @endforeach
                            </select> <br>
                            <input placeholder="Link Imgur com imagem..." type="text" class="inputImg" name="img"> <br>
                            <button type="submit" class="addImgJogoBtn">Adicionar</button>
                            @if (Session::has('success'))
                                <div class="alertSubmit">
                                    <i class="alertSubmit1"></i> {{ Session::get('success') }}
                                </div>
                            @endif 
                        </form>
                    </div>
                </div>
            </div>
        @endif
        <section class="ajudaAjudarArea" id="mover">
            <div class="textColumn">
            <h1>Ajuda-nos a <span>ajudar!</span></h1>
            <p>A Fate Esports tem muitos mais objetivos do que vencer e para isso nós precisamos dos nossos fãs para
                ajudar</p>
            <p>Maneiras de ajudar a Fate:</p>
            </div>    
            <div class="ajudaAjudarArea--propostas">
                <div class="proposta">
                    <p>Escolhe ajudar</p>
                    <img src="img/homePage/propostas/caridade.png" alt="">
                    <p class="padFrase">Tu poderás ajudar-nos a apoiar as instituições</p>
                </div>
                <div class="proposta">
                    <p>Comprar Merch</p>
                    <img src="img/homePage/propostas/merchandising.png" alt="">
                    <p class="padFrase">Ajudas os jogadores e uma % vai para a caridade</p>
                </div>
                <div class="proposta">
                    <p>Assistir as competições</p>
                    <img src="img/homePage/propostas/watching-tv.png" alt="">
                    <p class="padFrase">Ao assistires as competições já nos ajudas muito!</p>
                </div>
            </div>
            <br><br><br><br>
        </section>
        <!-- <section class="parcerias">
            <h1>Nossos <span>Parceiros</span></h1>
            <div>
               
            </div>
        </section> -->
    </div>
@endsection

@section('scripts')
@endsection