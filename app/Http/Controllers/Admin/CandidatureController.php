<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidature;
use Auth;
use Alert;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatures = Candidature::orderBy('id','desc')->get();
        return view('admin.emploi.candidature.index',compact('candidatures'));
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
        $cv=$request->cv;
            $curriculum =$cv->getClientOriginalName();
            $request->cv->move('assets/fiche', $curriculum);

        $lettre=$request->lettre;
            $lettre =$lettre->getClientOriginalName();
            $request->lettre->move('assets/fiche', $lettre);

        $candidature = new Candidature;
        
        $candidature->create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'adresse'=>$request->adresse,
            'code_postal'=>$request->code_postal,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'poste'=>$request->poste,
            'cv'=>$curriculum,
            'lettre'=>$lettre,
            'description'=>$request->description,
        ]);

        Alert::success('Candidature envoyée!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->delete();

        Alert::info('Candidature supprimée !');
        return redirect()->route('candidatures.index');
    }

    public function cv($pdf){

        $candidature = Candidature::find($pdf);

        return view('admin.emploi.candidature.cv', compact('candidature'));
    }

    public function lettre($pdf){

        $candidature = Candidature::find($pdf);

        return view('admin.emploi.candidature.lettre', compact('candidature'));
    }

    public function valide(Request $request, $id){

        $status = "Validé";

        $candidature = Candidature::where('id', $id)->firstOrFail();

        $candidature->update([
            'user_id'=> Auth::user()->id,
            'statut'=> $status,
        ]);

        Alert::success('Candidature validée !');
        return redirect()->back();
    }

    public function rejete(Request $request, $id){

        $status = "Réjété";

        $candidature = Candidature::where('id', $id)->firstOrFail();

        $candidature->update([
            'user_id'=> Auth::user()->id,
            'statut'=> $status,
        ]);

        Alert::info('Candidature réjétée !');
        return redirect()->back();
    }
}
