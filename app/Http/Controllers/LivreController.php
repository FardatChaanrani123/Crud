<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use View;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listLivre = Livre::all();
        return view('/viewLivre.index',compact('listLivre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('viewLivre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $donne = $request->all();
        $save = Livre::create($donne);
        return redirect()->route('livre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livre = Livre::find($id);
        return View('viewLivre.show',compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $limodif = Livre::find($id);
        return view('viewLivre.edit',compact('limodif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $limodif = Livre::find($id);
        $limodif->titre = $request->titre;
        $limodif->auteur = $request->auteur;
        $limodif->year = $request->year;
        $limodif->description = $request->description;
        $limodif->save();
        return redirect()->route('livre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lidelete = Livre::find($id);
        $lidelete->delete();
        return redirect()
            ->route('livre.index')
            ->with('succes','livre supprime avec succes');
    }
}
