<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_emploi;
use App\Models\Emploi;
use Auth;
use Alert;

class EmploisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplois = Emploi::all();
        $categories = Category_emploi::all();
        return view('admin.emploi.index', compact('categories','emplois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category_emploi::all();
        return view('admin.emploi.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emploi = new Emploi;
        
        $emploi->create([
            'user_id'=> Auth::user()->id,
            'category_emploi_id'=>$request->category_emploi_id,
            'type_contrat'=>$request->type_contrat,
            'experience'=>$request->experience,
            'niveau'=>$request->niveau,
            'nbre_place'=>$request->nbre_place,
            'libelle'=>$request->libelle,
            'date_limite'=>$request->date_limite,
            'description'=>$request->description,
        ]);

        Alert::success('Offre publiée!');
        return redirect()->route('emplois.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category_emploi::all();
        $emploi = Emploi::where('id', $id)->firstOrFail();

        return view('admin.emploi.show', compact('categories','emploi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category_emploi::all();
        $emploi = Emploi::where('id', $id)->firstOrFail();

        return view('admin.emploi.edit', compact('categories','emploi'));
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
        $categories = Category_emploi::all();
        $emploi = Emploi::where('id', $id)->firstOrFail();

        $emploi->update([
            'user_id'=> Auth::user()->id,
            'category_emploi_id'=>$request->category_emploi_id,
            'type_contrat'=>$request->type_contrat,
            'experience'=>$request->experience,
            'niveau'=>$request->niveau,
            'nbre_place'=>$request->nbre_place,
            'libelle'=>$request->libelle,
            'date_limite'=>$request->date_limite,
            'description'=>$request->description,
        ]);

        Alert::info('Offre mise à jour !');
        return redirect()->route('emplois.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emploi = Emploi::findOrFail($id);
        $emploi->delete();

        Alert::info('Offre supprimée!');
        return redirect()->route('emplois.index');
    }
}
