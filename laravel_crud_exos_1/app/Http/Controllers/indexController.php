<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class indexController extends Controller
{
    public function index() {
        $datas = Pokemon::all();
    return view('pages.home',compact('datas'));
}
    public function create() {
    return view('pages.form');
}

    public function store(Request $request) {
        $newPkm = new Pokemon();
        $newPkm->nom = $request->nom;
        $newPkm->type = $request->type;
        $newPkm->niveau = $request->niveau;
        $newPkm->save();
    return redirect()->back();
}
}
