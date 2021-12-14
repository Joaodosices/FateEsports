<?php

namespace App\Http\Controllers;

use App\Models\Imagesgame;
use App\Models\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class ImgHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $games = Game::all();
        $imgs = Imagesgame::all();
        
        //check se o user é admin
        $id = Auth::id();
        $admins = Admin::all();
        if (Auth::check()) {
            foreach ($admins as $admin) {
                if ($admin["id_user"] == $id) {
                    $request->session()->put('authAdmin', '1');
                } else {
                    $request->session()->put('authAdmin', '0');
                }
            }
        }

        return view('index', compact('games', 'imgs'));
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
        $Imagesgames = Imagesgame::create([
            'description' => "Monocromatico",
            'img' => $request->img,
            'id_game' => $request->id_game
        ]);

        return redirect()->route('index.main')->withSuccess("Imagem submetida");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomePageImg  $homePageImg
     * @return \Illuminate\Http\Response
     */
    public function show(HomePageImg $homePageImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePageImg  $homePageImg
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePageImg $homePageImg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePageImg  $homePageImg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePageImg $homePageImg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePageImg  $homePageImg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imgDel = Imagesgame::find($id);
        $imgDel->delete();
        return redirect()->route('index.main')->withSuccess("Imagem apagada!");
    }
}
