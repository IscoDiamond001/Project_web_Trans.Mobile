<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\compagnie;
use App\Models\message;
use App\Models\trajet;
use App\Models\payement;
class ClientController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = client::create([
            'idAgent' => $request->idAgent,
            'idCp' => $request->idCp,
            'idT' => $request->idT,
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'genre' => $request->genre,
            'email' => $request->email,
            'numTel' => $request->numTel,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'place' => $request->place
        ]);
        return $result;
    }

    public function compagnie(Request $request)
    {
        $comp =compagnie::all();
        return $comp;
    }

    public function message(Request $request)
    {
        $mess =message::all();
        return $mess;
    }

    public function liste(Request $request,$id)
    {

        $list =trajet::where('idCp',$id)->get();
        return $list;
    }

    public function pay(Request $request)
    {
        $paye = payement::create([
            'idClient'=> client::get()->last()->idClient,
            'somme' => $request->somme
        ]);
        return $paye;
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
