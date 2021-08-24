<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
class homeController extends Controller
{
    public function index(){
        $datas = Ingredient::all();
        return view('pages.home', compact('datas'));
    }

    public function create(){
        return view('pages.createIngredient');
    }

    public function store(Request $request){
        $newEntry = new Ingredient;
        $newEntry->nom = $request->nom;
        $newEntry->quantite = $request->quantite;
        $newEntry->lien = $request->lien;
        $newEntry->save();
        return redirect()->back();
    }
    public function destroy(Ingredient $id){
         $id->delete();

        return redirect('/');
    }
    public function show(Ingredient $id){
        $ingredient = $id;
        return view('pages.showIngredient',compact('ingredient'));
    }
}
