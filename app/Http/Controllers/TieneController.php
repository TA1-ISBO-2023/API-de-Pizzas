<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiene;

class TieneController extends Controller
{
    public function Create(Request $request){
        $tiene = new Tiene();
        $tiene-> pizza_id = $request->idPizza;
        $tiene-> ingrediente_id  = $request->idIngrediente;
        $tiene->save();
        return $tiene;
    }

    public function Read(Request $request){
        return Tiene::all();
    }
}
