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
}
