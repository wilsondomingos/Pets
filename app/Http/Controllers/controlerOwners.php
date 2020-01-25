<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlerOwners extends Controller
{
    public function index()
    {
        $owner=\App\owner::all();
        $pets=\App\pet::all();
      return view('index',compact(['owner','pets']));
    }


    public function create(){
        $pet=new \App\Pet();
        return view('ownerCreate',compact('pet'));
    }
    public function store(Request $request){
        //gravar
        $dados=$request->all();
        $owners=\App\Owner::all();
        $owners->name=$dados['nome'];
        $owners->name=$dados['telefone'];
        $owners->pet_id=$dados['pet_id'];
        $owners->save();
        dd($owners);
        return back();
    }
}
