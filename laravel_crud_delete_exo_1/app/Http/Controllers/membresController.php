<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
class membresController extends Controller
{
    public function index() {
        $datas = Membre::take(2)->get();
    return view('pages.membres',compact('datas'));
}


    public function create() {
    return view('pages.form');
}

    public function store(Request $request) {
        $newEntry = new Membre;
        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->genre = $request->genre;
        $newEntry->save();
    return redirect()->back();
}

public function destroy($id){
    $data = Membre::find($id);
    $data->delete();
    return redirect()->back();
}
}
