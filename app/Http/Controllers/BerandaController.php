<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    // mengarahkan ke beranda
    public function index(){
        return view('beranda');
    }

    
}
