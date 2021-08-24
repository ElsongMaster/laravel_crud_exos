<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class animalsController extends Controller
{
    public function index(){
        $datas = Animal::all();

        return view('pages.Animals',compact('datas'));
    }


    public function create(){
        return view('pages.newAnimal');
    }

    public function store(Request $request){
        $newEntry = new Animal;
        $newEntry->genre = $request->genre;
        $newEntry->age = $request->age;
        $newEntry->save();
        return redirect()->back();
    }
    public function show(Animal $id){
        $animal = $id;
        return view('layouts.showAnimal',compact('animal'));
    }

    public function destroy(Animal $id){
        $id->delete();
        return redirect('/');
    }

    public function edit(Animal $id){
        $animal = $id;
        return view('layouts.editAnimal',compact('animal'));
    }

    public function update(Animal $id, Request $request){
        $animal = $id;
        $animal->genre = $request->genre;
        $animal->age = $request->age;
        $animal->save();
        return  redirect('/');
    }
}
