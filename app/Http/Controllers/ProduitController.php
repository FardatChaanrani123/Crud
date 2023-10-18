<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use View;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listprod = Produit::all();
        return View('produits.index',compact('listprod'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $produit = new Produit;
        // $produit->libelle = $request->libelle;
        // $produit->prix = $request->prix;
        // $produit->quantite = $request->quantite;
        // $produit->description = $request->description;
        // $produit->save();
        $data = $request->all();
        $save = Produit::create($data);
        return redirect()->route('produit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Produit::find($id);
        return view('produits.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recuper = Produit::find($id);
        return View('produits.edit',compact('recuper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $data = Produit::find($id);
       $data->libelle = $request->libelle;
       $data->prix = $request->prix;
       $data->quantite = $request->quantite;
       $data->description = $request->description;
       $data->save();
       return redirect()->route('produit.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd('suppression echoue');
        $data = Produit::find($id);
        $data->delete();
        return redirect()->route('produit.index');
    }
}
