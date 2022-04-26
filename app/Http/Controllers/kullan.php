<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\film;

class kullan extends Controller
{
    public function goster(){
        $film = film::all();

        return view('koltuk',array('film'=>$film));
    }
}
