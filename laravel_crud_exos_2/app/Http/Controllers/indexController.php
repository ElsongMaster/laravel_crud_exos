<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class indexController extends Controller
{
     public function index() {
         $datas = Student::all();
    return view('pages.home',compact('datas'));
}

     public function create() {
    return view('pages.form');
}

     public function store(Request $request) {
        $newStudent = new Student;
        $newStudent->nom = $request->nom;
        $newStudent->genre = $request->genre;
        $newStudent->email = $request->email;
        $newStudent->age = $request->age;
        $newStudent->save();
    return redirect('/');
}


}
