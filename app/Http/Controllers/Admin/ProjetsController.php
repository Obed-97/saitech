<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_projet;
use App\Models\Projet;
use Image;
use Auth;
use Alert;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::orderBy('id','desc')->get();

        return view('admin.projet.index', compact('projets'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category_projet::all();
        return view('admin.projet.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = NULL;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalName();
            $location = public_path('admin/assets/images/'.$filename);
            Image::make($image)->save($location);   
        }

        $projet = new Projet;
        
        $projet->create([
            'user_id'=> Auth::user()->id,
            'category_projet_id'=>$request->category_projet_id,
            'libelle'=>$request->libelle,
            'statut'=>$request->statut,
            'image'=>$filename,
            'client'=>$request->client,
            'description'=>$request->description,
        ]);

        Alert::success('Projet crée !');

        return redirect()->route('projets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category_projet::all();
        $projet = Projet::where('id', $id)->firstOrFail();

        return view('admin.projet.show', compact('categories','projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category_projet::all();
        $projet = Projet::where('id', $id)->firstOrFail();

        return view('admin.projet.edit', compact('categories','projet'));
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
        $filename = NULL;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalName();
            $location = public_path('admin/assets/images/'.$filename);
            Image::make($image)->save($location);   
        }

        $categories = Category_projet::all();
        $projet = Projet::where('id', $id)->firstOrFail();

        $projet->update([
            'user_id'=> Auth::user()->id,
            'category_projet_id'=>$request->category_projet_id,
            'libelle'=>$request->libelle,
            'statut'=>$request->statut,
            'image'=>$filename,
            'client'=>$request->client,
            'description'=>$request->description,
        ]);

        Alert::success('Projet modifié !');
        return redirect()->route('projets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();

        Alert::info('Projet supprimé !');
        return redirect()->route('projets.index');
    }
}
