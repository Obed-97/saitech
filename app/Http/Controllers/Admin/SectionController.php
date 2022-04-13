<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Image;
use Alert;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();

        return view('admin.section.index', compact('sections'));
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

        $section = new Section;
        
        $section->create([
            'libelle'=>$request->libelle,
            'image'=>$filename,
            'description'=>$request->description,
        ]);

        Alert::success('Section créée !');

        return redirect()->route('section.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Section::where('id', $id)->firstOrFail();

        return view('admin.section.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $section = Section::where('id', $id)->firstOrFail();

        return view('admin.section.edit', compact('section'));
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

        $section = section::where('id', $id)->firstOrFail();

        $section->update([
            'libelle'=>$request->libelle,
            'image'=>$filename,
            'description'=>$request->description,
        ]);

        Alert::success('Section modifiée !');

        return redirect()->route('section.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();

        Alert::info('Section supprimée !');

        return redirect()->route('section.index');
    }
}
