<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
class HommesController extends Controller
{
    public function index() {
        $datas = Membre::where('genre','M')->get()->take(1);
    return view('pages.Hommes',compact('datas'));
}
}
