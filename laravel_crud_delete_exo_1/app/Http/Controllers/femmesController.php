<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
class FemmesController extends Controller
{
    public function index() {
        $datas = Membre::where('genre','F')->get();
    return view('pages.Femmes',compact('datas'));
}
}
