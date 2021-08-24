<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
class indexController extends Controller
{
    public function index(){
        $datas = Membre::all();
        dd($datas);
        return view('template.index',compact('datas'));
    }
}
