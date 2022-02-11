<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use App\Models\Trophie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class JogoEquipaController extends Controller
{
    public function __construct(){
        $this->cookie = 0;
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
    public function show($id_game)
    {
        $gamesList = [];
        $cookieChecker = 0;
        if (isset($_COOKIE[$id_game])){
            if ($_COOKIE[$id_game] == 1) {
                $this->cookie = 1;
                $cookieChecker  = $this->cookie;
            } else {
                $this->cookie = 0;
                $cookieChecker  = $this->cookie;
            }
        }
        if (Session::get('authAdmin') == 1) {
            $gamesList = Game::all();
        }
        $gameName = Game::where('id', '=', $id_game)->get();
        $players = Player::where('id_game', '=', $id_game)->get();
        $trophies = Trophie::where('id_game', '=', $id_game)->orderBy('date', 'desc')->get();
        $trophiesCount = count($trophies);
        $firstPlaced = Trophie::where('position', '=', 1)->where('id_game', '=', $id_game)->get();
        $firstPlaced = count($firstPlaced);
        $otherPositions = Trophie::whereBetween('position', [2, 4])->where('id_game', '=', $id_game)->get();
        $otherPositions = count($otherPositions);
        
        return view('jogoEquipa', compact('gameName','cookieChecker' ,'players', 'trophies', 'trophiesCount', 'firstPlaced', 'otherPositions', 'gamesList'));
    }

    public function upvotePlayer($idGame, $upvotes, $idPlayer)
    {
        $Addupvotes = $upvotes + 1;
        $player = Player::find($idPlayer);

        setcookie($idGame, "1", time() + (86400 * 1000), "/");

        if($player) {
            $player->upvotes = $Addupvotes;
            $player->save();
        }

        return redirect()->back();
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
