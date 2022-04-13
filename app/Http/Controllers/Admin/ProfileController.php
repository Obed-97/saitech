<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Auth;
use Hash;
Use Alert;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile.index');
    }

    public function password()
    {
        return view('admin.profile.password');
    }

    public function password_store(Request $request)
    {
        $current_user = auth()->user();

        if (Hash::check($request->current_password, $current_user->password)) {
           
            $current_user->update([

                'password'=>bcrypt($request->new_password)

            ]);

            Alert::success('Mot de passe changé');

            return redirect()->back();

        }else{

            Alert::error('Erreur : mot de passe incorrect');

            return redirect()->back();
        }
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
            $location = public_path('/admin/assets/images/users/'.$filename);
            Image::make($image)->save($location);   
        }

        $user = Auth::User();
        $user->photo = $filename;
        $user->save();

        Alert::success('Photo changée');

        return redirect()->route('profile.index');
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
        $profile = auth()->user();
        
        $profile->update([
            'matricule'=>$request->matricule,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'tel'=>$request->tel,
            'date_n'=>$request->date_n,
            'lieu_n'=>$request->lieu_n,
            'adresse'=>$request->adresse,
        ]);

        Alert::success('Profile mis à jour');

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
