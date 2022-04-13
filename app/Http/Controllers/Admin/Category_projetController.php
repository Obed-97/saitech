<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_projet;
use Auth;
use Alert;

class Category_projetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category_projet::all();

        return view('admin.projet.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new Category_projet;
        
        $categorie->create([
            'user_id'=> Auth::user()->id,
            'libelle'=>$request->libelle,
            'description'=>$request->description,
        ]);

        Alert::success('Catégorie créée !');

        return redirect()->route('category_projet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Category_projet::where('id', $id)->firstOrFail();

        return view('admin.projet.categorie.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Category_projet::where('id', $id)->firstOrFail();

        return view('admin.projet.categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Category_projet::where('id', $id)->firstOrFail();

        $categorie->update([
            'libelle'=>$request->libelle,
            'description'=>$request->description,
        ]);

        Alert::success('Catégorie modifiée !');
        return redirect()->route('category_projet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Category_projet::findOrFail($id);
        $categorie->delete();

        Alert::info('Catégorie supprimée !');
        return redirect()->route('category_projet.index');
    }
}
