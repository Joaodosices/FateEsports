<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('parcerias', compact('partners'));
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
        $partners = Partner::create([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'linkpartner' => $request->linkpartner,
            'img' => $request->img,
        ]);

        return redirect()->route('partner.index')->withSuccess("Editado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        // $share=new Partner;

      

       $array=$request->except('_token');

       
       
        $share = Partner::find($id);


        if($array){

            // $share->name=$array['changename'];

            $share->name=$array['changename'];
            
            $share->description=$array['changedescription'];

            $share->linkpartner=$array['changelinkpartner'];

            $share->img=$array['changeimg'];

            // $share=array(
            //     'name'=>$array['changename']
            // );

            // $share->name = $request->changename;
            $share->save();
        }
            
    
            // 'name' => $request->get('changename'),
            // 'description' => $request->get('changedescription'),
            // 'linkpartner' => $request->get('changelinkpartner'),
            // 'img' => $request->get('changeimg'),


          
          return redirect()->route('partner.index')->withSuccess("Editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partnerDel = Partner::find($id);
        $partnerDel->delete();

        return redirect()->route('partner.index')->withSuccess("Parceria Eliminada!");
    }
}
