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
}
