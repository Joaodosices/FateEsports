@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/jogoEquipaAdmin.css') }}" type="text/css">
@endsection

@section('content')
<div class="painelAdmin" id="Removido">  
    <h1 class="tituloPainel titulo-h1">Painel Admin <span>Jogadores/Troféus</span></h1>
    <div class="areaEdicaoAdmin">
        <div class="areaEdicaoAdmin--listaJogos">
            <ul>
                @foreach($gamesList as $game)
                    <li class="areaEquipaSelection"><a href="/jogos/equipas/admin/{{ $game->id }}" class="equipaSelection"><p class="text-p textselected">{{$game->name}}</p></a></li>
                @endforeach
            </ul>
        </div>  
        <div class="areaEdicaoAdmin--listaJogadores">
                <form action="/jogos/equipas/admin/add/player" method="POST">
                @csrf
                    <div id="areaAdicionarJogador">
                        <td><input type="button" class="callToAction" id="btnAdicionarJogador" value="Adicionar Jogador">
                        <input type="submit" class="callToAction" id="btnsubmeterPlayer" value="Submeter"></td>
                        <td><input type="button" class="callToAction" id="btnCancelarAdicionarJogador" value="Cancelar"></td>
                    </div>
            
                    <div id="areaInputsAdicionarJogador">
                            <p>Nome do jogador...</p>
                            <input class="" type="text" name="nomeJogador">
                            <p>Link da foto</p>
                            <input class="" type="text" name="imgJogador" value="https://i.imgur.com/CDVqIQj.png">
                            <p>Utilizador</p>
                            <select name="" id="jogadorUser">
                                @foreach($listUsers as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                @endforeach
                            </select>
                    </div>
                </form>
                <table>
                @foreach($listPlayers as $player)
                    <tr class="playerRows">
                        <form action="/jogos/equipas/admin/player/{{$player->id}}/changeName" method="POST">
                        @csrf
                        <td><p class="text-p playerNameHolder">{{$player->nickname}}</p> 
                        <input disabled class="playerNameChanger" type="text" name="inputNomePlayer" value="{{$player->nickname}}"></td>
                        <td><input type="button" class="callToAction showChangeName" value="Editar"></input>
                        <input type="submit" value="Alterar" class="callToAction btnPlayerNameInput"></td>
                        </form>
                        <td><input type="button" class="callToAction cancelarChangeName" value="Cancelar"><a href='/jogos/equipas/admin/delete/player/{{$player->id}}' class="callToAction removerBtn">remover</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="areaEdicaoAdmin--listaTrofeus">
            <table>
                <tr>
                    <td><input type="button" class="callToAction" id="btnAdicionarTrophie" value="Adicionar Troféu"></td>
                </tr>
                @foreach($trophieList as $trophie)
                <tr>
                    <form action="/jogos/equipas/admin/trophie/{{$trophie->id}}/changeName" method="POST">
                    @csrf
                    <td><p class="text-p trophieNameHolder">{{$trophie->name}}</p>
                    <input disabled class="trophieNameChanger" type="text" name="inputNomeTrophie" value="{{$trophie->name}}"></td>
                    <td><input type="button" class="callToAction showChangeTrophie" value="Editar"></input>
                    <input type="submit" value="Alterar" class="callToAction btnTrophieNameInput"></td>
                    </form>
                    <td><input type="button" class="callToAction cancelarChangeTrophie" value="Cancelar"><a href='/jogos/equipas/admin/delete/trophie/{{$trophie->id}}' class="callToAction removerBtnTrophie">remover</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/jogoEquipaAdmin.js') }}"></script>
@endsection