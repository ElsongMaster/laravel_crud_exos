<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
class homeController extends Controller
{
    public function index(){
        $datas = Membre::all();
        return view('pages.home',compact('datas'));
    }

    public function create(){
        return view('pages.newMembre');
    }

    public function store(Request $request){
        $newEntry = new Membre;
        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->genre = $request->genre;
        $newEntry->save();
        return redirect()->back();
    }

    public function show(Membre $id){
        $membre = $id;
        return view('layouts.showMembre',compact('membre'));
    }

    public function edit(Membre $id){
        $membre = $id;
        return view('layouts.editMembre',compact('membre'));
    }

        public function destroy(Membre $id){
            $id->delete();
        return redirect('/');
    }
        public function destroyAll(){
            Membre::truncate();
        return redirect('/');
    }
    public function update(Membre $id, Request $request){
        $membre = $id;
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect(route('show'));
    }
}
