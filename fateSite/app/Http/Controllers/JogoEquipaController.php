<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Trophie;
use Illuminate\Http\Request;

class JogoEquipaController extends Controller
{
    
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
        $players = Player::where('id_game', '=', $id_game)->get();
        $trophies = Trophie::where('id_game', '=', $id_game)->get();
        $trophiesCount = count($trophies);
        $firstPlaced = Trophie::where('position', '=', 1)->where('id_game', '=', $id_game)->get();
        $firstPlaced = count($firstPlaced);
        $otherPositions = Trophie::whereBetween('position', [2, 4])->where('id_game', '=', $id_game)->get();
        $otherPositions = count($otherPositions);
        return view('jogoEquipa', compact('id_game', 'players', 'trophies', 'trophiesCount', 'firstPlaced', 'otherPositions'));
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