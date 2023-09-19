<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function Create(Request $request){
        $pizza = new Pizza();
        $pizza->nombre = $request->nombre;
        $pizza->precio = $request->precio;
        $pizza->save();
        return $pizza;
    }

    public function Read(Request $request){
        return Pizza::with("Ingredientes") -> get();
    }
    
    public function ReadOne(Request $request, $idPizza){
        return Pizza::findOrFail($idPizza) -> with("Ingredientes");
    }

    public function Delete(Request $request, $idPizza){
        $pizza = Pizza::findOrFail($idPizza);
        $pizza->delete();
        return [ "resultado" => "Pizza eliminada"];
    }

    public function Update(Request $request, $idPizza){
        $pizza = Pizza::findOrFail($idPizza);
        $pizza->nombre = $request->nombre;
        $pizza->precio = $request->precio;
        $pizza->save();
        return $pizza;
    }


}
