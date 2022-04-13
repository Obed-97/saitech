<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type_service;
use App\Models\Section;
use App\Models\Service;
use Auth;
use Image;
use Alert;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type_service::all();
        $sections = Section::orderBy('id','desc')->get();
        $services = Service::orderBy('id','desc')->get();
        return view('admin.service.index', compact('types','sections','services'));
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

        $service = new Service;
        
        $service->create([
            'user_id'=> Auth::user()->id,
            'section_id'=>$request->section_id,
            'type_service_id'=>$request->type_service_id,
            'libelle'=>$request->libelle,
            'prix'=>$request->prix,
            'type_client'=>$request->type_client,
            'image'=>$filename,
            'description'=>$request->description,
        ]);

        Alert::success('Service crée !');

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Service = Service::where('id', $id)->firstOrFail();

        return view('admin.service.show', compact('Service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sections = Section::all();
        $type_services = Type_service::all();
        $Service = Service::where('id', $id)->firstOrFail();

        return view('admin.service.edit', compact('Service','sections','type_services'));
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

        $Service = Service::where('id', $id)->firstOrFail();

        $Service->update([
            'user_id'=> Auth::user()->id,
            'section_id'=>$request->section_id,
            'type_service_id'=>$request->type_service_id,
            'libelle'=>$request->libelle,
            'prix'=>$request->prix,
            'type_client'=>$request->type_client,
            'image'=>$filename,
            'description'=>$request->description,
        ]);

        Alert::success('Service modifié !');

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Service = Service::findOrFail($id);
        $Service->delete();

        Alert::info('Service supprimé !');

        return redirect()->route('services.index');
    }
}
