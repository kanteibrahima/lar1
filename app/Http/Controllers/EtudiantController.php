<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->classe = $request->input('classe');
        $etudiant->save();

        return redirect('/ajouter')->with('status','l\'etudiant est enregistre avec succes');
    }

    public function update_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->classe = $request->input('classe');
        $etudiant->update();
        return redirect('/etudiant')->with('status','l\'etudiant est modifie avec succes');
    }

    public function delete_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status','l\'etudiant est suprime avec succes');
    }
    
}
