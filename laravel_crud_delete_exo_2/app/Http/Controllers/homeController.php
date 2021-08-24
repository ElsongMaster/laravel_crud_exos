<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
class homeController extends Controller
{
    public function index() {
        $allData  = Voiture::all();
        $cheaperCar = Voiture::where('prix',"<",4000);
        $expensiveCar = Voiture::where('prix',">",4000);
        $reductionCar = Voiture::whereNot('reduction',null);
    return view('pages.home',compact('allData','cheaperCar','expensiveCar','reductionCar'));
}

    public function create() {
    return view('pages.createCar');
}

    public function store(Request $request) {
        $newEntry = new Voiture;
        $newEntry->marque = $request->marque;
        $newEntry->annee = $request->annee;
        $newEntry->couleur = $request->couleur;
        $newEntry->prix = $request->prix;
        $newEntry->reduction = $request->reduction;
        $newEntry->save();
    return redirect()->back();
}


    public function destroy($id) {
        $entryToDel = Voiture::find($id);
        $entryToDel->delete();
    return redirect()->back();
}


}
