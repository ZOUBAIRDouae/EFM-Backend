<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use App\Http\Requests\LivreRequest;


class LivreController extends Controller
{
    public function index(){
        $livres = Livre::paginate(10);
        return view('Livres.index' , compact('livres'));
    }

    public function create(){

        return view('Livres.create');
    }
    
    public function store(LivreRequest $request){

        
        // $request->validate([
        //     'titre' => 'required',
        //     'auteur' => 'required',
        //     'nombre_pages' => 'required',
        //     'categorie' => 'required',
        // ]);

        $livre = new Livre();
        $livre->titre = $request['titre'];
        $livre->auteur = $request['auteur'];
        $livre->nombre_pages = $request['nombre_pages'];
        $livre->categorie = $request['categorie'];
        $livre->save();

        return redirect()->route('livres.index')->with('success', 'Livre ajouté avec succès !');
    }


}
