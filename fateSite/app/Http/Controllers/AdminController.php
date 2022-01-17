<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$admins=Admin::all();
        //$users=User::all();
    
        //  foreach ($users as $user) {
        //     foreach ($admins as $admin) {
        //         if ($user["id"] == $admin["id_user"]) {
                    
        //         }
        //     }
        // }
        
        $users = DB::table('users')
        ->join('admins', 'users.id', '=', 'admins.id_user')
        ->select('admins.*','users.name','users.surname')
        ->get();
        
        return view('sobre',compact('users'));
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
        $users = User::create([
            'id' => $request->id,
            'name' => $request->name,
            'surname' => $request->surname,
            'img' => $request->img,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        ]);

        return redirect()->route('admins.index')->withSuccess("Editado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $adminDel = Admin::find($id);
        $adminDel->delete();

        return redirect()->route('admins.index')->withSuccess("Admin Eliminado.");
    }
}
