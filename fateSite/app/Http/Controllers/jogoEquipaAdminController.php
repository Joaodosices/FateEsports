<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Game;
use App\Models\Player;
use App\Models\Trophie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class jogoEquipaAdminController extends Controller
{
    public function __construct(){
        $this->gamesList = Game::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (Session::get('authAdmin') != 1) {
            return redirect()->back();
        }

        $listUsers = DB::table("users")->select('*')->whereNotIn('id',function($query) {
            $query->select('id_user')->from('players');
         })->get();
        $listPlayers = [];
        $trophieList = [];
        $gamesList = $this->gamesList;
        return view('jogoEquipaAdmin', compact('gamesList', 'listPlayers', 'trophieList', 'listUsers'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function filterGame($id)
    {
        Session::put('gameSelected', $id);
        $gamesList = $this->gamesList;
        $listUsers = DB::table("users")->select('*')->whereNotIn('id',function($query) {
            $query->select('id_user')->from('players');
         })->get();
        $listPlayers = Player::where('id_game', '=', $id)->get();
        $trophieList = Trophie::where('id_game', '=', $id)->get();

        return view('jogoEquipaAdmin', compact('gamesList', 'listPlayers', 'trophieList', 'listUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPlayer($idPlayer)
    {
        $playerDelete = Player::find($idPlayer);
        $playerDelete->delete();
        return redirect()->back()->withSuccess("Player apagado!");
    }

    public function destroyTrophie($idTrophie)
    {
        $trophieDelete = Trophie::find($idTrophie);
        $trophieDelete->delete();
        return redirect()->back()->withSuccess("Troféu apagado!");
    }

    public function changeNamePlayer(Request $request, $idPlayer)
    {
        $changeNamePlayer = Player::find($idPlayer)->update([
            'nickname' => $request->get('inputNomePlayer')
          ]);
    
        return redirect()->back()->withSuccess("Nome de jogador modificado!");
    }

    public function changeNameTrophie(Request $request, $idTrophie)
    {
        $changeNameTrophie = Trophie::find($idTrophie)->update([
            'name' => $request->get('inputNomeTrophie')
          ]);
          
        return redirect()->back()->withSuccess("Nome de troféu modificado!");
    }
    
    public function addPlayer(Request $request)
    {
        $addPlayer = Player::create([
            'nickname' => $request->nomeJogador,
            'img' => $request->imgJogador,
            'id_game' => Session::get('gameSelected'),
            'id_user' => $request->jogadorUser
        ]);
        return redirect()->back()->withSuccess("Jogador adicionado!");
    }

    public function addTrophie(Request $request)
    {
        $addTrophie = Trophie::create([
            'name' => $request->nomeTrofeu,
            'date' => $request->dataTrofeu,
            'position' => $request->positionTrofeu,
            'linktournament' =>$request->linkTrofeu,
            'id_game' => Session::get('gameSelected')
        ]);
        return redirect()->back()->withSuccess("Trofeu modificado!");
    }
}
