<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function index() {
        $logement= Logement::all();
        return view('logement.index',[
            'logement'=>$logement
        ]);
    }
    public function store(Request $request){
        
        Logement::create([
            'nom'=>$request['nom'],
            'capacité'=>$request['capacité'],
            'type'=>$request['type'],
            'lieu'=>$request['lieu'],
            'photo'=>$request['photo'],
            'disponibilite'=>$request['disponibilite']
        ]);
        return back()->with('success', 'Données bien créé.');

    }

    public function update (Request $request, $id){
        $update= Logement::find($id);
        $update->nom = $request['nom'];
        $update->capacité = $request['capacité'];
        $update->type = $request['type'];
        $update->lieu = $request['lieu'];
        $update->photo = $request['photo'];
        $update->disponibilite = $request['disponibilite'];
        $update->save();
        return back()->with('success', 'Données bien enregistrée.');
    }
    public function destroy($id){
        $delete= Logement::find($id);
        $delete->delete();
        // dd($delete);
        return back()->with('success','Element supprimé avec succès.');
    }
}
