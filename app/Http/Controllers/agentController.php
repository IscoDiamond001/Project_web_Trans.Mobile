<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class agentController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $input=$request->all();
        $request->validate([
            'prenom' => 'required|max:200',
            'nom' => 'required|max:200',
            'numTel' => 'required|max:8',
            'email' => 'required|email|max:40',
            'adresse' => 'required|max:200',
            'pass' => 'required|min:6|max:200',
        ]);
        $input['pass']=\bcrypt($input[('pass')]);
        agent::create($input);
        return back()->with('success','Engistrement fait avec succes');
    }
    
    //
}
