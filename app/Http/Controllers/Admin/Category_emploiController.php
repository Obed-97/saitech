<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_emploi;
use Auth;
use Alert;

class Category_emploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category_emploi::all();
        return view('admin.emploi.categorie.index', compact('categories'));
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
        $categorie = new Category_emploi;
        
        $categorie->create([
            'user_id'=> Auth::user()->id,
            'libelle'=>$request->libelle,
            'description'=>$request->description,
        ]);

        Alert::success('Catégorie créée !');

        return redirect()->route('category_emplois.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Category_emploi::where('id', $id)->firstOrFail();

        return view('admin.emploi.categorie.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Category_emploi::where('id', $id)->firstOrFail();

        return view('admin.emploi.categorie.edit', compact('categorie'));
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
        
        $categorie = Category_emploi::where('id', $id)->firstOrFail();

        $categorie->update([
            'libelle'=>$request->libelle,
            'description'=>$request->description,
        ]);

        Alert::success('Catégorie modifiée !');
        return redirect()->route('category_emplois.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Category_emploi::findOrFail($id);
        $categorie->delete();

        Alert::info('Catégorie supprimée !');
        
        return redirect()->route('category_emplois.index');
    }
}
