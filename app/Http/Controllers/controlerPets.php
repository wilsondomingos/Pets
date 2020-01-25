<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlerPets extends Controller
{
    public function index()
    {
        $pets=\App\pet::all();

      return view('index',compact('pets'));
    }

    public function create(){
        $owners=\App\Owner::all();
        return view('petsCreate',compact('owners'));
    }
    public function store(Request $request){
        //gravar
        $dados=$request->all();
        $pet=new \App\Pet();
        $pet->name=$dados['nome'];
        $pet->rga=$dados['rga'];
        $pet->data_nascimento=$dados['data_nascimento'];
        $pet->owner_id=$dados['owner_id'];
        $pet->save();
        dd($pet);
        return back();
    }

    public function edit(Request $request, $id){
        $owners=\App\Owner::all();
        $pet=\App\pet::find($id);
        return view('petsEdit',compact('owners','pet'));
    }


    public function update(Request $request, $id) {
        $dados = $request->all();
        //Grava os dados

        $pet = \App\Pet::find($id);
        $pet->name = $dados['nome'];
        $pet->rga = $dados['rga'];
        $pet->data_nascimento = $dados['data_nascimento'];
        $pet->owner_id = $dados['owner_id'];

        $pet->save();

        return redirect()->route('pets.index');
    }

    public function destroy($id) {
        $pet = \App\Pet::find($id);
        $pet->delete();

        return back();
    }
}
