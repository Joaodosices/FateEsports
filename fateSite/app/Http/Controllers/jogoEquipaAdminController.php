<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use App\Models\Trophie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

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
        $listPlayers = [];
        $trophieList = [];
        $gamesList = $this->gamesList;
        return view('jogoEquipaAdmin', compact('gamesList', 'listPlayers', 'trophieList'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function filterGame($id)
    {
        $gamesList = $this->gamesList;
        $listPlayers = Player::where('id_game', '=', $id)->get();
        $trophieList = Trophie::where('id_game', '=', $id)->get();

        return view('jogoEquipaAdmin', compact('gamesList', 'listPlayers', 'trophieList'));
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
    public function destroy($id)
    {
        //
    }
}
