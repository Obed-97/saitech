<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type_service;
use Image;
use Alert;

class Type_serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type_service::orderBy('id','desc')->get();
        return view('admin.type_service.index', compact('types'));
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
        $filename = NULL;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalName();
            $location = public_path('admin/assets/images/'.$filename);
            Image::make($image)->save($location);   
        }

        $type_service = new Type_service;
        
        $type_service->create([
            'libelle'=>$request->libelle,
            'image'=>$filename,
            'description'=>$request->description,
        ]);

        Alert::success('Type de service crée !');

        return redirect()->route('type-service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type_service = Type_service::where('id', $id)->firstOrFail();

        return view('admin.type_service.show', compact('type_service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_service = Type_service::where('id', $id)->firstOrFail();

        return view('admin.type_service.edit', compact('type_service'));
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

        $type_service = Type_service::where('id', $id)->firstOrFail();

        $type_service->update([
            'libelle'=>$request->libelle,
            'image'=>$filename,
            'description'=>$request->description,
        ]);

        Alert::success('Type de service modifié !');

        return redirect()->route('type-service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type_service = Type_service::findOrFail($id);
        $type_service->delete();

        Alert::info('Type de service supprimé !');
        return redirect()->route('type-service.index');
    }
}
