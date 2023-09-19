<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ingrediente;

class IngredienteController extends Controller
{
    public function Create(Request $request){
        $ingrediente = new Ingrediente();
        $ingrediente->nombre = $request->nombre;
        $ingrediente->save();
        return $ingrediente;
    }

    public function Read(Request $request){
        return Ingrediente::all();
    }

    public function ReadOne(Request $request, $idIngrediente){
        return Ingrediente::findOrFail($idIngrediente);
    }

    public function Delete(Request $request, $idIngrediente){
        $ingrediente = Ingrediente::findOrFail($idIngrediente);
        $ingrediente->delete();
        return [ "resultado" => "Ingrediente eliminado"];
    }

    public function Update(Request $request, $idIngrediente){
        $ingrediente = Ingrediente::findOrFail($idIngrediente);
        $ingrediente->nombre = $request->nombre;
        $ingrediente->save();
        return $ingrediente;
    }
}
